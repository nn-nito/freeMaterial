<?php
/**
 * Created by PhpStorm.
 * User: nn
 * Date: 2020/03/14
 * Time: 14:58
 */

namespace App\Http\Handlers;

use App\PhotoTag;

/**
 * Class PhotoTagHandler
 *
 * @package App\Http\Handlers
 */
class PhotoTagHandler
{
	/**
	 * @var PhotoTag
	 */
	private $photo_tag;



	/**
	 * PhotoTagHandler constructor.
	 */
	public function __construct()
	{
		$this->photo_tag = new PhotoTag();
	}
}