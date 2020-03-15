<?php

namespace App\Http\Controllers;

use App\Http\Services\TagService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class TagListController
 *
 * @package App\Http\Controllers
 */
class TagListController extends Controller
{
	/**
	 * @return Factory|View
	 */
    public function index()
	{
		$tag_service = TagService::create();
		$tags = $tag_service->getFromAToO();

		return view('tagList', compact('tags'));
	}
}
