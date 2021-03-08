<?php

use Illuminate\Database\Seeder;

class SortTableSeeder extends Seeder
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
                'sname' => Str::random(5),

            ],
            [
                'sname' => Str::random(5),

            ],
            [
                'sname' => Str::random(5),

            ],
            [
                'sname' => Str::random(5),

            ]
        ];
        DB::table('sort')->insert($data);
    }
}
