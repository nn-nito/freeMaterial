<?php

namespace App\Http\Controllers;

use App\Http\Services\PhotoService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PhotoDetailController extends Controller
{
    /**
     * @param int $id
     * @return Factory|View
     */
    public function index(int $id)
    {
        $photo_service = PhotoService::create();
        // 写真IDに紐づく写真の詳細を取得
        $photo_detail = $photo_service->getPhotoDetail($id);

        return view('photoDetail', compact('id', 'photo_detail'));
    }
}
