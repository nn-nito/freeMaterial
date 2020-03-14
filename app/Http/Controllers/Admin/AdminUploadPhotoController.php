<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\PhotoCreator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
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
	 * @return Factory|View
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

		// 写真をデータベースに保存しS3に投稿(photos)
		$photo_creator = PhotoCreator::create();
		$photo = $photo_creator->execute($input);
		// タグを保存(tags、photo_tags)

		return view('admin.uploadPhoto', compact('photo'));
	}
}
