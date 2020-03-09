<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoTagsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$photo_tags = [
			[
				'photo_id' => '1',
				'tag_id' => '1',
			],
			[
				'photo_id' => '1',
				'tag_id' => '4',
			],
			[
				'photo_id' => '2',
				'tag_id' => '4',
			],
			[
				'photo_id' => '4',
				'tag_id' => '1',
			],
			[
				'photo_id' => '1',
				'tag_id' => '2',
			],
			[
				'photo_id' => '4',
				'tag_id' => '4',
			],
			[
				'photo_id' => '4',
				'tag_id' => '5',
			],
		];

		$db = DB::table('photo_tags');
		$db->delete();
		DB::statement("ALTER TABLE photo_tags AUTO_INCREMENT = 1;");
		foreach ($photo_tags as $photo_tag) {
			$db->insert([
				'photo_id' => $photo_tag['photo_id'],
				'tag_id' => $photo_tag['tag_id'],
			]);
		}
	}
}
