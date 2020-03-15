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
use Illuminate\Database\Eloquent\Model;

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



	/**
	 * インフォIDに紐づくモデルを取得
	 *
	 * @param int $info_id
	 * @return Builder|Builder[]|Collection|Model|null
	 */
	public function fetchModelById(int $info_id)
	{
		return $this->info::query()->find($info_id);
	}



	/**
	 * 作成
	 *
	 * @param array $input
	 * @return Builder|Model
	 */
	public function create(array $input)
	{
		return $this->info::query()
			->create($input);
	}
}
