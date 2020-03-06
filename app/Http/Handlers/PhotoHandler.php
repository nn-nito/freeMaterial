<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/06
 * Time: 9:33
 */

namespace App\Http\Handlers;

use App\Photo;
use App\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PhotoHandler
 *
 * @package App\Http\Handlers
 */
class PhotoHandler
{
    /**
     * @var Photo
     */
    private $photo;



    /**
     * PhotoHandler constructor.
     */
    public function __construct()
    {
        $this->photo = new Photo();
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
        return $this->photo::query()
            ->whereMonth('created_at', $this_month)
            ->orderByDesc('created_at')
            ->paginate($pagination_count);
    }



    /**
     * idに紐づくモデルを取得
     *
     * @param int $photo_id
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function fetchModelById(int $photo_id)
    {
        return $this->photo::query()
            ->find($photo_id);
    }
}
