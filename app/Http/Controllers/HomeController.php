<?php

namespace App\Http\Controllers;

use App\Http\Services\InfoService;
use App\Http\Services\PhotoService;
use App\Http\Services\TagService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Self_;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
	/**
	 * 最新の写真のページネーション数
	 *
	 * @var int
	 */
	private const LATEST_PHOTO_PAGINATION_COUNT = 30;
	private const INFO_PAGINATION_COUNT = 5;
	private const POPULAR_PHOTO_PAGINATION_COUNT = 5;
	private const TAG_PAGINATION_COUNT = 30;



	/**
	 * @return Factory|View
	 */
	public function index()
	{
		// お知らせ取得
		$info_service = InfoService::create();
		$infos = $info_service->getCollectionByLatest(self::INFO_PAGINATION_COUNT);

		// 最新の写真を取得
		$photo_service = PhotoService::create();
		$photos = $photo_service->getPaginationByLatestMonth(self::LATEST_PHOTO_PAGINATION_COUNT);

		// 人気の写真を取得
		$popular_photos = $photo_service->getCollectionByPeriod('', self::POPULAR_PHOTO_PAGINATION_COUNT);

		// タグを取得
		$tag_service = TagService::create();
		$tags = $tag_service->getAllCollectionBySortPopular(self::TAG_PAGINATION_COUNT);

		return view('home', compact('infos', 'photos', 'popular_photos', 'tags'));
	}
}
