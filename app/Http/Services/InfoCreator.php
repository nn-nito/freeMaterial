<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/15
 * Time: 13:35
 */

namespace App\Http\Services;

use App\Http\Handlers\InfoHandler;

/**
 * Class InfoCreator
 *
 * @package App\Http\Services
 */
class InfoCreator
{
	/**
	 * @var InfoHandler
	 */
	private $info_handler;



	/**
	 * デフォルト構成でインスタンス生成
	 *
	 * @return InfoCreator
	 */
	public static function create(): self
	{
		return new self(
			new InfoHandler()
		);
	}



	/**
	 * InfoCreator constructor.
	 *
	 * @param InfoHandler $info_handler
	 */
	public function __construct(
		InfoHandler $info_handler
	) {
		$this->info_handler = $info_handler;
	}
}