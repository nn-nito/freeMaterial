<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/08
 * Time: 17:08
 */

namespace App\Http\Handlers;

use App\PopularPhoto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PopularPhotoHandler
 *
 * @package App\Http\Handlers
 */
class PopularPhotoHandler
{
	/**
	 * @var PopularPhoto
	 */
	private $popular_photo;



	/**
	 * PopularPhotoHandler constructor.
	 */
	public function __construct()
	{
		$this->popular_photo = new PopularPhoto();
	}



	/**
	 * 全て取得
	 *
	 * @return Builder[]|Collection
	 */
	public function fetchAll()
	{
		return $this->popular_photo::query()->get();
	}



	/**
	 * ランクでソートされた特定のカラムを取得
	 *
	 * @param array $column_names
	 * @return Builder[]|Collection
	 */
	public function fetchDescCollectionBySpecificColumn(array $column_names)
	{
		return $this->popular_photo::query()
			->orderByDesc('rank')
			->get($column_names);
	}
}