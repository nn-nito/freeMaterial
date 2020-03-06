<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/06
 * Time: 9:33
 */

namespace App\Http\Handlers;

use App\Photo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class PhotoHandler
 *
 * @package App\Http\Handlers
 */
class PhotoHandler
{
    /**
     * PhotoHandler constructor.
     */
    public function __construct()
    {
    }



    /**
     * 最新の月の写真をページネーションで取得
     *
     * @param int $this_month
     * @param int $pagination_count
     * @return LengthAwarePaginator
     */
    public function fetchPaginationByLatestMonth(int $this_month, int $pagination_count): LengthAwarePaginator
    {
        return Photo::query()
            ->whereMonth('created_at', $this_month)
            ->orderByDesc('created_at')
            ->paginate($pagination_count);
    }
}
