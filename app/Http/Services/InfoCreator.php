<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/15
 * Time: 13:35
 */

namespace App\Http\Services;

use App\Http\Handlers\InfoHandler;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

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



	/**
	 * 実行
	 *
	 * @param array $input
	 * @return Builder|Model
	 */
	public function execute(array $input)
	{
		return $this->info_handler->create($input);
	}
}