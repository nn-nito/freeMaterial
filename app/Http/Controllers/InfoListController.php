<?php

namespace App\Http\Controllers;

use App\Http\Handlers\InfoHandler;
use App\Http\Services\InfoService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class InfoListController
 *
 * @package App\Http\Controllers
 */
class InfoListController extends Controller
{
	private const PAGINATION_COUNT = 20;



	/**
	 * @return Factory|View
	 */
	public function index()
	{
		$info_service = new InfoService();
		$infos = $info_service->getPaginationByLatest(self::PAGINATION_COUNT);

		return view('infoList', compact('infos'));
	}
}
