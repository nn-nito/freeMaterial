<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_1.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_2.png',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
            [
                'user_id' => 1,
                'filename' => 'https://photo-material-free.s3.ap-northeast-1.amazonaws.com/photo_20200305_1_3.jpg',
                'created_at' => '2020-03-06 10:00:00',
                'description' => '説明だよ',
                'resolution' => '500×500',
                'download_count' => 150,
            ],
        ];

        DB::table('photos')->delete();
        DB::statement("ALTER TABLE photos AUTO_INCREMENT = 1;");
        foreach ($photos as $photo) {
            DB::table('photos')->insert([
                'user_id' => $photo['user_id'],
                'filename' => $photo['filename'],
                'created_at' => $photo['created_at'],
                'description' => isset($photo['description']) ? $photo['description'] : null,
                'resolution' => $photo['resolution'],
                'download_count' => isset($photo['download_count']) ? $photo['download_count'] : 0,
            ]);
        }
    }
}