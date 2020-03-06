<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 1,
                'email' => 'aaaabbbbccc@gmail.com',
                'password' => 'aj3tra4fad',
            ],
        ];

        DB::table('users')->delete();
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 1;");
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
