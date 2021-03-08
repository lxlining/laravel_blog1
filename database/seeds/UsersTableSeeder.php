<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'username' => Str::random(3),
                'email' => Str::random(8).'@qq.com',
                'password' => Str::random(8),
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'username' => Str::random(3),
                'email' => Str::random(8).'@qq.com',
                'password' => Str::random(8),
                'created_at'=>date('Y-m-d H:i:s')
            ]
        ];
        DB::table('user')->insert($data);
    }
}
