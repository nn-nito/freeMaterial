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



	/**
	 * デフォルト構成でインスタンス生成
	 *
	 * @return DownloadPhotoService
	 */
	public static function create(): self
	{
		return new self(
			new PhotoHandler()
		);
	}



	/**
	 * DownloadPhotoService constructor.
	 *
	 * @param PhotoHandler $photo_handler
	 */
	public function __construct(
		PhotoHandler $photo_handler
	) {
		$this->photo_handler = $photo_handler;
	}



	/**
	 * クライアントにダウンロードさせる為のレスポンス構築
	 *
	 * @param int $photo_id
	 * @return array
	 * @throws FileNotFoundException
	 */
	public function buildResponse(int $photo_id): array
	{
		$photo = $this->photo_handler->fetchModelById($photo_id);
		if (is_null($photo)) {
			return [];
		}
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
	public function incrementDownloadCount(int $photo_id): int
	{
		return $this->photo_handler->incrementDownloadCount($photo_id);
	}
}