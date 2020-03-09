<?php

namespace App\Http\Controllers;

use App\Http\Services\PhotoService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PhotoListController
 *
 * @package App\Http\Controllers
 */
class PhotoListController extends Controller
{
	/**
	 * @param string $tag
	 * @param int    $period
	 * @return Factory|View
	 */
    public function index(string $tag, int $period)
	{
		$photo_service = new PhotoService();
		return view('photoList', compact());
	}
}
