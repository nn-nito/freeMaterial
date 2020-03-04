<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/04
 * Time: 22:30
 */

namespace App\Http\Services;

use App\Http\Handlers\InfoHandler;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

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
}
