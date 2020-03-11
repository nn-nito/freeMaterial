<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/10
 * Time: 20:45
 */

namespace App\Http\Services;

use App\Http\Handlers\TagHandler;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class TagService
 *
 * @package App\Http\Services
 */
class TagService
{
	/**
	 * @var TagHandler
	 */
	private $tag_handler;

	private const KANA = [
		'あ～お' => ['あ', 'い', 'う', 'え', 'お',],
		'か～こ' => ['か', 'き', 'く', 'け', 'こ',],
		'さ～そ' => ['さ', 'し', 'す', 'せ', 'そ',],
		'た～と' => ['た', 'ち', 'つ', 'て', 'と',],
		'な～の' => ['な', 'に', 'ぬ', 'ね', 'の',],
		'は～ほ' => ['は', 'ひ', 'ふ', 'へ', 'ほ',],
		'ま～も' => ['ま', 'み', 'む', 'め', 'も',],
		'や～よ' => ['や', 'ゆ', 'よ',],
		'ら～ろ' => ['ら', 'り', 'る', 'れ', 'ろ',],
		'わ～ん' => ['わ', 'を', 'ん',],
	];



	/**
	 * TagService constructor.
	 */
	public function __construct()
	{
		$this->tag_handler = new TagHandler();
	}



	/**
	 * あ～おの配列に分けた配列を取得
	 *
	 * @return array ['あ' => [$tag, $tag]]
	 */
	public function getFromAToO(): array
	{
		$tags = $this->tag_handler->fetchCollectionSortNameKana();
		$div = [
			'あ～お' => [],
			'か～こ' => [],
			'さ～そ' => [],
			'た～と' => [],
			'な～の' => [],
			'は～ほ' => [],
			'ま～も' => [],
			'や～よ' => [],
			'ら～ろ' => [],
			'わ～ん' => [],
		];

		foreach ($tags as $tag) {
			foreach (self::KANA as $top => $kanas) {
				foreach ($kanas as $kana) {
					if ($kana === (mb_substr($tag->name_kana, 0, 1))) {
						$div[$top][] = $tag;
					}
				}
			}
		}

		return $div;
	}



	/**
	 * 人気順でソートしてコレクションですべて取得
	 *
	 * @param int $limit
	 * @return Builder[]|Collection
	 */
	public function getAllCollectionBySortPopular(int $limit)
	{
		return $this->tag_handler->fetchAllCollectionBySortPopular($limit);
	}
}