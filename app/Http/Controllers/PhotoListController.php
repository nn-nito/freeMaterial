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
	private const PAGINATION_COUNT = 3;



	/**
	 * @param string $tag
	 * @param string|null $period
	 * @return Factory|View
	 */
	public function index(string $tag, ?string $period = null)
	{
		$photo_service = new PhotoService();
		$photo_list = null;
		if ('tag_all' === $tag && is_null($period) ) {
			$photo_list = $photo_service->getPaginationSortDesc(self::PAGINATION_COUNT);
		} else {
			// 総合人気の時はクエリの都合上中身を空にする
			$tmp_period = ('total' === $period) ? '' : $period;
			$photo_list = $photo_service->getPaginationByPeriod(self::PAGINATION_COUNT, $tmp_period);
		}

		return view('photoList', compact('photo_list', 'tag', 'period'));
	}
}
