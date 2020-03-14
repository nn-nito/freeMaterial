<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/14
 * Time: 14:54
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoHandler;
use App\Http\Handlers\PhotoTagHandler;
use App\Http\Handlers\TagHandler;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class PhotoCreator
 *
 * @package App\Http\Services
 */
class PhotoCreator
{
	/**
	 * @var PhotoHandler
	 */
	private $photo_handler;

	/**
	 * @var TagHandler
	 */
	private $tag_handler;

	/**
	 * @var PhotoTagHandler
	 */
	private $photo_tag_handler;



	/**
	 * デフォルト構成でインスタンス作成
	 *
	 * @return PhotoCreator
	 */
	public static function create(): self
	{
		return new self(
			new PhotoHandler(),
			new TagHandler(),
			new PhotoTagHandler()
		);
	}



	/**
	 * PhotoCreator constructor.
	 *
	 * @param PhotoHandler    $photo_handler
	 * @param TagHandler      $tag_handler
	 * @param PhotoTagHandler $photo_tag_handler
	 */
	public function __construct(
		PhotoHandler $photo_handler,
		TagHandler $tag_handler,
		PhotoTagHandler $photo_tag_handler
	) {
		$this->photo_handler = $photo_handler;
		$this->tag_handler = $tag_handler;
		$this->photo_tag_handler = $photo_tag_handler;
	}



	/**
	 * 実行
	 *
	 * @param array $input
	 * @return Builder|Model
	 */
	public function execute(array $input)
	{
		// S3へアップロード
		$s3 = Storage::disk('s3');
		$filename = $s3->putFile('/', $input['photo']);
		$url = $s3->url($filename);

		$insert_content = [
			'user_id' => $input['user_id'],
			'url' => $url,
			'filename' => $filename,
			'description' => $input['description'],
			'resolution' => $input['resolution'],
		];

		return $this->photo_handler->create($insert_content);
	}
}