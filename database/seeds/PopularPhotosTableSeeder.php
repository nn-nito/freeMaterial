<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopularPhotosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$popular_photos = [
			[
				'photo_id' => 1,
				'rank' => 4,
			],
			[
				'photo_id' => 2,
				'rank' => 3,
			],
			[
				'photo_id' => 4,
				'rank' => 2,
			],
			[
				'photo_id' => 7,
				'rank' => 1,
			],
			[
				'photo_id' => 2,
				'rank' => 5,

			],
			[
				'photo_id' => 5,
				'rank' => 6,

			],
		];

		DB::table('popular_photos')->delete();
		DB::statement("ALTER TABLE popular_photos AUTO_INCREMENT = 1;");
		foreach ($popular_photos as $popular_photo) {
			DB::table('popular_photos')->insert([
				'photo_id' => $popular_photo['photo_id'],
				'rank' => $popular_photo['rank'],
			]);
		}
	}
}
