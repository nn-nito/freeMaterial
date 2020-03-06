<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/06
 * Time: 9:40
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoHandler;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class PhotoService
 *
 * @package App\Http\Services
 */
class PhotoService
{
    /**
     * @var PhotoHandler
     */
    private $photo_handler;



    /**
     * PhotoService constructor.
     */
    public function __construct()
    {
        $this->photo_handler = new PhotoHandler();
    }



    /**
     * 最新の写真をページネーションで取得
     *
     * @param int $pagination_count ページネーションの件数
     * @return LengthAwarePaginator
     */
    public function getPaginationByLatestMonth(int $pagination_count): LengthAwarePaginator
    {
        $this_month = Carbon::now()->month;
        return $this->photo_handler->fetchPaginationByLatestMonth($this_month, $pagination_count);
    }
}
