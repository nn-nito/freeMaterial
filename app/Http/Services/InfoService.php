<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/04
 * Time: 22:30
 */

namespace App\Http\Services;

use App\Http\Handlers\InfoHandler;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InfoService
 *
 * @package App\Http\Services
 */
class InfoService
{
    /**
     * @var InfoHandler
     */
    private $info_handler;



    public function __construct()
    {
        $this->info_handler = new InfoHandler();
    }



    /**
     * 最新のお知らせを指定した件数だけ取得
     *
     * @param int $count 取得する件数
     * @return Builder[]|Collection
     */
    public function getCollectionByLatest(int $count)
    {
        return $this->info_handler->fetchCollectionByLatest($count);
    }



	/**
	 * 最新のお知らせをページネーションで取得
	 *
	 * @param int $pagination_count
	 * @return LengthAwarePaginator
	 */
	public function getPaginationByLatest(int $pagination_count): LengthAwarePaginator
	{
		return $this->info_handler->fetchPaginationByLatest($pagination_count);
	}



	/**
	 * インフォIDに紐づくモデルを取得
	 *
	 * @param int $info_id
	 * @return Builder|Builder[]|Collection|Model|null
	 */
	public function getModelById(int $info_id)
	{
		return $this->info_handler->fetchModelById($info_id);
	}
}
