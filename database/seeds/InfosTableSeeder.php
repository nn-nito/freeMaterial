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
            ],
            [
                'title' => '100枚追加しました',
            ],
            [
                'title' => 'いい写真が撮れました',
            ],
            [
                'title' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            ],
            [
                'title' => 'bbbbbbb',
            ],
            [
                'title' => 'ccc',
            ],
        ];

        foreach ($infos as $info) {
            DB::table('infos')->insert([
                'title' => $info['title'],
                'body' => isset($info['body']) ? $info['body'] : null,
                'target_date' => isset($info['target_date']) ? $info['target_date'] : null,
            ]);
        }
    }
}
