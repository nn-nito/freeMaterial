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
use function foo\func;

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



	/**
	 * ダウンロード数をインクリメント
	 *
	 * @param int $photo_id
	 * @return int
	 */
	public function incrementDownloadCount(int $photo_id)
	{
		return $this->photo::query()
			->where('id', $photo_id)
			->increment('download_count');
	}



	/**
	 * 期間でフィルタリングして人気の写真取得
	 *
	 * @param string   $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @param int|null $limit
	 * @return Builder[]|Collection
	 */
	public function fetchCollectionByPeriod(string $period = '', ?int $limit = null)
	{
		$query = $this->photo::query();
		if (false === is_null($limit)) {
			$query->limit($limit);
		}
		if ('' !== $period) {
			$period = ('_' . $period);
		}
		return $query
			->orderByDesc('download_count' . $period)
			->get();
	}



	/**
	 * 新着順にソートされているページネーションを取得する
	 *
	 * @param int $pagination_count
	 * @return LengthAwarePaginator
	 */
	public function fetchPaginationSortDesc(int $pagination_count): LengthAwarePaginator
	{
		return $this->photo::query()
			->orderByDesc('created_at')
			->paginate($pagination_count);
	}



	/**
	 * 期間でフィルタリングして人気の写真をページネーションで取得
	 *
	 * @param int    $pagination_count
	 * @param string $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @return LengthAwarePaginator
	 */
	public function fetchPaginationByPeriod(int $pagination_count, string $period = ''): LengthAwarePaginator
	{
		if ('' !== $period) {
			$period = ('_' . $period);
		}

		return $this->photo::query()
			->orderByDesc('download_count' . $period)
			->paginate($pagination_count);
	}



	/**
	 * 期間とタグでフィルタリングして人気の写真をページネーションで取得
	 *
	 * @param int    $pagination_count
	 * @param string $tag
	 * @param string $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @return LengthAwarePaginator
	 */
	public function fetchPaginationByPeriodAndTag(int $pagination_count, string $tag, string $period = ''): LengthAwarePaginator
	{
		if ('' !== $period) {
			$period = ('_' . $period);
		}

		return $this->photo::query()
			->select(['photos.*', 'photo_tags.name'])
			->join('photo_tags', 'photos.id', 'photo_tags.photo_id')
			->where('photo_tags.name', $tag)
			->orderByDesc('photos.download_count' . $period)
			->paginate($pagination_count);
	}



	/**
	 * タグでフィルタリングして新着順でページネーションを取得
	 *
	 * @param int    $pagination_count
	 * @param string $tag
	 * @return LengthAwarePaginator
	 */
	public function fetchPaginationSortByTag(int $pagination_count, string $tag): LengthAwarePaginator
	{
		return $this->photo::query()
			->select(['photos.*', 'photo_tags.name'])
			->join('photo_tags', 'photos.id', 'photo_tags.photo_id')
			->where('photo_tags.name', $tag)
			->orderByDesc('photos.created_at')
			->paginate($pagination_count);
	}
}
