<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/10
 * Time: 20:44
 */

namespace App\Http\Handlers;

use App\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class TagHandler
 *
 * @package App\Http\Handlers
 */
class TagHandler
{
	/**
	 * @var Tag
	 */
	private $tag;



	/**
	 * TagHandler constructor.
	 */
	public function __construct()
	{
		$this->tag = new Tag();
	}



	/**
	 * カナであいうえお順にソートしたコレクションを取得
	 *
	 * @return Builder[]|Collection
	 */
	public function fetchCollectionSortNameKana()
	{
		return $this->tag::query()
			->orderBy('name_kana')
			->get();
	}
}