<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
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
                'adminname' => 'admin',
                'pass'=>'admin'

            ],
            [
                'adminname' => Str::random(5),
                'pass'=>Str::random(8)

            ],
        ];
        DB::table('admin')->insert($data);
    }
}
