<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
		return view('admin.uploadInfo');
	}
}
