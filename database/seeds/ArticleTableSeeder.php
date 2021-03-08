<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
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
                'title' => Str::random(3),
                'content' => Str::random(8).'@qq.com',
                'user_id' => rand(1,2),
                'sort_id'=>rand(1,2),
                'created_at'=>date('Y-m-d H:i:s')
            ],
            [
                'username' => Str::random(3),
                'email' => Str::random(8).'@qq.com',
                'user_id' => rand(1,2),
                'sort_id'=>rand(1,2),
                'created_at'=>date('Y-m-d H:i:s')
            ]
        ];
        DB::table('article')->insert($data);
    }
}
