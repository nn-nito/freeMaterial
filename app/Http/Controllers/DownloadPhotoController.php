<?php

namespace App\Http\Controllers;

use App\Http\Services\DownloadPhotoService;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

/**
 * Class DownloadPhotoController
 *
 * @package App\Http\Controllers
 */
class DownloadPhotoController extends Controller
{
	/**
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 * @throws FileNotFoundException
	 */
	public function index(int $id)
	{
		$download_photo_service = DownloadPhotoService::create();
		DB::beginTransaction();
		try {
			$response_param = $download_photo_service->buildResponse($id);
			$download_photo_service->incrementDownloadCount($id);
			DB::commit();
		} catch (\Exception $e) {
			throw new $e;
		}
		return Response::make(
			$response_param['contents'],
			$response_param['status_code'],
			$response_param['headers']
		);
	}
}
