<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class AboutWebsiteController
 *
 * @package App\Http\Controllers
 */
class AboutWebsiteController extends Controller
{
	/**
	 * @return Factory|View
	 */
    public function index()
	{
		return view('aboutWebsite', compact(''));
	}
}
