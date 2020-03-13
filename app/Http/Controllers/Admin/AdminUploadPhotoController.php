<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
		return view('admin.uploadPhoto');
	}
}
