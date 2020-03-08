<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/06
 * Time: 9:40
 */

namespace App\Http\Services;

use App\Http\Handlers\PhotoHandler;
use App\Http\Handlers\PopularPhotoHandler;
use App\Photo;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

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
	 * PhotoService constructor.
	 */
	public function __construct()
	{
		$this->photo_handler = new PhotoHandler();
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
	 * 人気の写真取得
	 *
	 * @param int|null $photo_limit_count
	 * @return Builder[]|Collection
	 */
	public function getCollectionByPopularPhotoIds(?int $photo_limit_count = null)
	{
		$popular_photo_handler = new PopularPhotoHandler();
		$popular_photos = $popular_photo_handler->fetchDescCollectionBySpecificColumn(['photo_id'])->toArray();

		return $this->photo_handler->fetchCollectionByPopularPhotoIds($popular_photos, $photo_limit_count);
	}
}
