<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\PhotoCreator;
use App\Http\Services\TagCreator;
use App\Photo;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

/**
 * Class AdminUploadPhotoController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminUploadPhotoController extends Controller
{
	/**
	 * @return Factory|View
	 */
	public function index()
	{
		return view('admin.uploadPhoto');
	}



	/**
	 * @param Request $request
	 * @return ResponseFactory|Factory|Response|View
	 */
	public function create(Request $request)
	{
		$input = [];
		$input['user_id'] = $request->input('user_id');
		$input['photo'] = $request->file('photo');
		$input['tags'] = explode(',', $request->input('tags'));
		$input['tags_kana'] = explode(',', $request->input('tags_kana'));
		$input['description'] = $request->input('description', null);
		$input['resolution'] = $request->input('resolution');

		// 写真をS3に投稿しDBに保存
		DB::beginTransaction();
		$photo = null;
		try {
			$photo_creator = PhotoCreator::create();
			/** @var Photo $photo */
			$photo = $photo_creator->execute($input);
			// タグを保存(tags、photo_tags)
			TagCreator::create()->execute($input, $photo);
			DB::commit();
		} catch (\Exception $exception) {
			DB::rollBack();
			// TODO:とりあえず、、、、
			if (false === is_null($photo)) {
				Storage::disk('s3')->delete($photo->filename);
			}
			return response(['message' => $exception->getMessage()], 404);
		}

		return view('admin.uploadPhoto', compact('photo'));
	}
}
