<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/07
 * Time: 23:52
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoHandler;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;

/**
 * Class DownloadPhotoService
 *
 * @package App\Http\Services
 */
class DownloadPhotoService
{
	/**
	 * @var PhotoHandler
	 */
	private $photo_handler;



	public function __construct()
	{
		$this->photo_handler = new PhotoHandler();
	}



	/**
	 * クライアントにダウンロードさせる為のレスポンス構築
	 *
	 * @param int $photo_id
	 * @return array
	 * @throws FileNotFoundException
	 */
	public function buildResponse(int $photo_id)
	{
		$photo = $this->photo_handler->fetchModelById($photo_id);
		$filename = $photo->filename;
		$disk = Storage::disk('s3');
		$ex = substr($filename, -3);

		// レスポンスに必要な情報を構築
		$contents = $disk->get($filename);
		$status_code = 200;
		// pngとjpgしかない想定
		$headers = [
			'Content-Type' => 'image/' . $ex,
			'Content-Disposition' => 'attachment; filename="' . "{$filename}" . '"',
		];

		return [
			'contents' => $contents,
			'status_code' => $status_code,
			'headers' => $headers,
		];
	}



	/**
	 * ダウンロード数をインクリメント
	 *
	 * @param int $photo_id
	 * @return int
	 */
	public function incrementDownloadCount(int $photo_id)
	{
		return $this->photo_handler->incrementDownloadCount($photo_id);
	}
}