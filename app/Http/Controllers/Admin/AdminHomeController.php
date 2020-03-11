<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class AdminHomeController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminHomeController extends Controller
{
	/**
	 * @return Factory|View
	 */
    public function index()
	{
		return view('admin.base.common');
	}
}
