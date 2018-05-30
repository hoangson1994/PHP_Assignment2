<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')-> insert([[
            'rollNumber' => 'A12345',
            'name' => 'Hoang Thanh Son',
        ], [
            'rollNumber' => 'B54321',
            'name' => 'Nguyen Thi Trang',
        ], [
            'rollNumber' => 'C67890',
            'name' => 'Nguyen Van A',
        ], [
            'rollNumber' => 'D00345',
            'name' => 'Lo A Cay',
        ]]);
    }
}
