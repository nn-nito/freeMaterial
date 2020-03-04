<?php

namespace App\Http\Controllers;

use App\Http\Services\InfoService;
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
        $info_service = new InfoService();
        $infos = $info_service->getCollectionByLatest(5);

        return view('home', compact('infos'));
    }
}
