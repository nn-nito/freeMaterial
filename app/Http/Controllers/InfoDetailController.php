<?php

namespace App\Http\Controllers;

use App\Http\Services\InfoService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class InfoDetailController
 *
 * @package App\Http\Controllers
 */
class InfoDetailController extends Controller
{
	/**
	 * @param int $id
	 * @return Factory|View
	 */
    public function index(int $id)
	{
		$info_service = new InfoService();
		$info = $info_service->getModelById($id);

		return view('infoDetail', compact('info'));
	}
}
