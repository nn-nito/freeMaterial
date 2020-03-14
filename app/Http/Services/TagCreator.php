<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/14
 * Time: 20:24
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoTagHandler;
use App\Http\Handlers\TagHandler;
use App\Photo;

/**
 * Class TagCreator
 *
 * @package App\Http\Services
 */
class TagCreator
{
	/**
	 * @var TagHandler
	 */
	private $tag_handler;

	/**
	 * @var PhotoTagHandler
	 */
	private $photo_tag_handler;



	/**
	 * デフォルト構成でインスタンスを生成
	 *
	 * @return TagCreator
	 */
	public static function create(): self
	{
		return new self(
			new TagHandler(),
			new PhotoTagHandler()
		);
	}



	/**
	 * TagCreator constructor.
	 *
	 * @param TagHandler      $tag_handler
	 * @param PhotoTagHandler $photo_tag_handler
	 */
	public function __construct(
		TagHandler $tag_handler,
		PhotoTagHandler $photo_tag_handler
	) {
		$this->tag_handler = $tag_handler;
		$this->photo_tag_handler = $photo_tag_handler;
	}



	/**
	 * 実行
	 *
	 * @param array $input
	 * @param Photo $photo
	 */
	public function execute(array $input, Photo $photo)
	{
		// TODO:インサートのほうは一つのクエリでできる
		// TODO:管理画面だから許して＞＜
		foreach ($input['tags'] as $key => $tag_name) {
			$tag_name_kana = $input['tags_kana'][$key];
			// increment:true create:model
			$tag = $this->tag_handler->incrementOrCreateByName($tag_name, $tag_name_kana);
			if (true === $tag) {
				// タグのnameからタグIDをとってくる
				$tag = $this->tag_handler->fetchByName($tag_name);
			}
			$photo_tag_input = [
				'photo_id' => $photo->id,
				'tag_id' => $tag->id,
				'name' => $tag->name,
			];
			$this->photo_tag_handler->create($photo_tag_input);
		}
	}
}