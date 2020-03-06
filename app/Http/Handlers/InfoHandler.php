<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/04
 * Time: 21:38
 */

namespace App\Http\Handlers;

use App\Info;
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
}
