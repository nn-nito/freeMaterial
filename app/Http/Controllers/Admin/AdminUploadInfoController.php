<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\InfoCreator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class AdminUploadInfoController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminUploadInfoController extends Controller
{
	/**
	 * index
	 *
	 * @return Factory|View
	 */
	public function index()
	{
		return view('admin.uploadInfo');
	}



	/**
	 * create
	 *
	 * @param Request $request
	 * @return Factory|View
	 */
	public function create(Request $request)
	{
		$input['title'] = $request->input('title');
		$input['body'] = $request->input('body');
		$input['target_date'] = $request->input('target-date');

		$info_creator = InfoCreator::create();
		$info = $info_creator->execute($input);

		return view('admin.uploadInfo');
	}
}
