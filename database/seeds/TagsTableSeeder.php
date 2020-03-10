<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$tags = [
			[
				'name' => '自然',
				'name_kana' => 'しぜん',
				'related_photo_count' => 2,
			],
			[
				'name' => '山',
				'name_kana' => 'やま',
				'related_photo_count' => 1,
			],
			[
				'name' => '海',
				'name_kana' => 'うみ',
				'related_photo_count' => 1,
			],
			[
				'name' => '人',
				'name_kana' => 'ひと',
				'related_photo_count' => 3,
			],
			[
				'name' => '空',
				'name_kana' => 'そら',
				'related_photo_count' => 1,
			],
		];

		$db = DB::table('tags');
		$db->delete();
		DB::statement("ALTER TABLE tags AUTO_INCREMENT = 1;");
		foreach ($tags as $tag) {
			$db->insert([
				'name' => $tag['name'],
				'name_kana' => $tag['name_kana'],
				'related_photo_count' => $tag['related_photo_count'],
			]);
		}
	}
}
