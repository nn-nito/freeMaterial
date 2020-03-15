<?php

namespace App\Console\Commands;

use App\Http\Handlers\PhotoHandler;
use Illuminate\Console\Command;

/**
 * 月間写真ダウンロード数を初期化
 *
 * @package App\Console\Commands
 */
class InitializeDownloadCountMonthly extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'initialize_download_count:monthly';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = '月間写真ダウンロード数を初期化';

	/**
	 * 初期化する数
	 *
	 * @var int
	 */
	private const INITIALIZING_VALUE = 0;



	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}



	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$photo_handler = new PhotoHandler();
		$count = $photo_handler->updateByDownloadCount('download_count_monthly', self::INITIALIZING_VALUE);

		return 0;
	}
}
