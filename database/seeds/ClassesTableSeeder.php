<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')-> insert([[
            'ma_lop' => 'T1707M',
            'status' => 1,
        ], [
            'ma_lop' => 'T1707E',
            'status' => 1,
        ]]);

    }
}
