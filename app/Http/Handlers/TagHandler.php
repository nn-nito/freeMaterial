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
use Illuminate\Database\Eloquent\Model;

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



	/**
	 * 人気順でソートしてコレクションですべて取得
	 *
	 * @param int $limit
	 * @return Builder[]|Collection
	 */
	public function fetchAllCollectionBySortPopular(int $limit)
	{
		return $this->tag::query()
			->orderByDesc('related_photo_count')
			->limit($limit)
			->get();
	}



	/**
	 * 関連する写真数をインクリメントするかインサート
	 *
	 * @param string $tag
	 * @param string $tag_kana
	 * @return bool|Builder|Model
	 */
	public function incrementOrCreateByName(string $tag, string $tag_kana)
	{
		$count = $this->tag::query()
			->where('name', $tag)
			->increment('related_photo_count');

		if (0 < $count) {
			return true;
		}

		return $this->tag::query()
			->create([
				'name' => $tag,
				'name_kana' => $tag_kana,
				'related_photo_count' => 1,
			]);
	}



	/**
	 * 名前に紐づくデータを取得
	 *
	 * @param string $name
	 * @return Builder|Model|object|null
	 */
	public function fetchByName(string $name)
	{
		return $this->tag::query()
			->where('name', $name)
			->first();
	}
}