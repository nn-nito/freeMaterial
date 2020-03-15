<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/06
 * Time: 9:40
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoHandler;
use App\Photo;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
	 * デフォルト構成でインスタンス生成
	 *
	 * @return PhotoService
	 */
	public static function create(): self
	{
		return new self(
			new PhotoHandler()
		);
	}



	/**
	 * PhotoService constructor.
	 *
	 * @param PhotoHandler $photo_handler
	 */
	public function __construct(
		PhotoHandler $photo_handler
	) {
		$this->photo_handler = $photo_handler;
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



	/**
	 * 写真の詳細情報を取得
	 *
	 * @param int $photo_id
	 * @return array
	 */
	public function getPhotoDetail(int $photo_id): array
	{
		/** @var Photo $photo */
		$photo = $this->photo_handler->fetchModelById($photo_id);
		/** @var BelongsTo $user */
		$user = $photo->User;

		/** @var \DateTime $user_created_at */
		$user_created_at = $user->created_at;
		$post_date = $user_created_at->format('Y/m/d h:i');
		$photo_detail = [
			'url' => $photo->url,
			'user_name' => $user->name,
			'resolution' => $photo->resolution,
			'description' => $photo->description,
			'download_count' => $photo->download_count,
			'post_date' => $post_date,
		];

		return $photo_detail;
	}



	/**
	 * 期間でフィルタリングして人気の写真取得
	 *
	 * @param string   $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @param int|null $photo_limit_count
	 * @return Builder[]|Collection
	 */
	public function getCollectionByPeriod(string $period = '', ?int $photo_limit_count = null)
	{
		return $this->photo_handler->fetchCollectionByPeriod($period, $photo_limit_count);
	}



	/**
	 * 新着順にソートされているページネーションを取得する
	 *
	 * @param int $pagination_count
	 * @return LengthAwarePaginator
	 */
	public function getPaginationSortDesc(int $pagination_count): LengthAwarePaginator
	{
		return $this->photo_handler->fetchPaginationSortDesc($pagination_count);
	}



	/**
	 * 期間でフィルタリングして人気の写真をページネーションで取得
	 *
	 * @param int    $pagination_count
	 * @param string $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @return LengthAwarePaginator
	 */
	public function getPaginationByPeriod(int $pagination_count, string $period = ''): LengthAwarePaginator
	{
		return $this->photo_handler->fetchPaginationByPeriod($pagination_count, $period);
	}



	/**
	 * 期間とタグでフィルタリングして人気の写真をページネーションで取得
	 *
	 * @param int    $pagination_count
	 * @param string $tag
	 * @param string $period '':総ダウンロード数 weekly:週間ダウンロード数 monthly:月間ダウンロード数
	 * @return LengthAwarePaginator
	 */
	public function getPaginationByPeriodAndTag(int $pagination_count, string $tag, string $period = ''): LengthAwarePaginator
	{
		return $this->photo_handler->fetchPaginationByPeriodAndTag($pagination_count, $tag, $period);
	}



	/**
	 * タグでフィルタリングして新着順でページネーションを取得
	 *
	 * @param int    $pagination_count
	 * @param string $tag
	 * @return LengthAwarePaginator
	 */
	public function getPaginationSortByTag(int $pagination_count, string $tag): LengthAwarePaginator
	{
		return $this->photo_handler->fetchPaginationSortByTag($pagination_count, $tag);
	}
}
