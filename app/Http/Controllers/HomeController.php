<?php

namespace App\Http\Controllers;

use App\Http\Services\InfoService;
use App\Http\Services\PhotoService;
use App\Http\Services\TagService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
	/**
	 * @return Factory|View
	 */
	public function index()
	{
		// お知らせ取得
		$info_service = InfoService::create();
		$infos = $info_service->getCollectionByLatest(5);

		// 最新の写真を取得
		$photo_service = PhotoService::create();
		$photos = $photo_service->getPaginationByLatestMonth(6);

		// 人気の写真を取得
		$popular_photos = $photo_service->getCollectionByPeriod('', 5);

		// タグを取得
		$tag_service = TagService::create();
		$tags = $tag_service->getAllCollectionBySortPopular(30);

		return view('home', compact('infos', 'photos', 'popular_photos', 'tags'));
	}
}
