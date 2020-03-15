<?php

namespace App\Http\Controllers;

use App\Http\Services\DownloadPhotoService;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\RedirectResponse;
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
	 * @return RedirectResponse|\Illuminate\Http\Response
	 */
	public function index(int $id)
	{
		if (0 >= $id) {
			abort(404);
		}
		
		$download_photo_service = DownloadPhotoService::create();
		$response_param = [];
		DB::beginTransaction();
		try {
			$response_param = $download_photo_service->buildResponse($id);
			if ([] === $id) {
				throw new \Exception();
			}
			$download_photo_service->incrementDownloadCount($id);
			DB::commit();
		} catch (\Exception $e) {
			abort(404);
		}
		return Response::make(
			$response_param['contents'],
			$response_param['status_code'],
			$response_param['headers']
		);
	}
}
