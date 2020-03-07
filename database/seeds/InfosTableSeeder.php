<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$infos = [
			[
				'title' => '更新がありました',
				'body' => 'っっっっっっっっあああ',
				'target_date' => Carbon::now()->format('Y-m-d'),
				'created_at' => '2020-03-06 10:00:00',
			],
			[
				'title' => '100枚追加しました',
				'created_at' => '2020-03-01 10:00:00',
			],
			[
				'title' => 'いい写真が撮れました',
				'created_at' => '2020-03-02 10:00:00',
			],
			[
				'title' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
				'created_at' => '2020-03-03 10:00:00',
			],
			[
				'title' => 'bbbbbbb',
				'created_at' => '2020-03-04 10:00:00',
			],
			[
				'title' => 'ccc',
				'created_at' => '2020-03-05 10:00:00',
			],
		];

		DB::table('infos')->delete();
		DB::statement("ALTER TABLE infos AUTO_INCREMENT = 1;");
		foreach ($infos as $info) {
			DB::table('infos')->insert([
				'title' => $info['title'],
				'body' => isset($info['body']) ? $info['body'] : null,
				'target_date' => isset($info['target_date']) ? $info['target_date'] : null,
				'created_at' => $info['created_at'],
			]);
		}
	}
}
