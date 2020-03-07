<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/04
 * Time: 21:38
 */

namespace App\Http\Handlers;

use App\Info;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class InfoHandler
 *
 * @package App\Http\Handlers
 */
class InfoHandler
{
	/**
	 * @var Info
	 */
	private $info;



	/**
	 * InfoHandler constructor.
	 */
	public function __construct()
	{
		$this->info = new Info();
	}



	/**
	 * 最新のお知らせをコレクションで取得
	 *
	 * @param int $count 取得する件数
	 * @return Builder[]|Collection
	 */
	public function fetchCollectionByLatest(int $count)
	{
		return $this->info::query()
			->limit($count)
			->orderByDesc('created_at')
			->get();
	}



	/**
	 * 最新のお知らせをページネーションで取得
	 *
	 * @param int $pagination_count
	 * @return LengthAwarePaginator
	 */
	public function fetchPaginationByLatest(int $pagination_count): LengthAwarePaginator
	{
		return $this->info::query()
			->orderByDesc('created_at')
			->paginate($pagination_count);
	}
}
