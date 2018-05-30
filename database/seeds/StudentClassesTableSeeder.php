<?php

use Illuminate\Database\Seeder;

class StudentClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')-> insert([[
            'rollNumber' => 'A12345',
            'ma_lop' => 'T1707M',
            'status' => 1
        ], [
            'rollNumber' => 'B54321',
            'ma_lop' => 'T1707M',
            'status' => 1
        ], [
            'rollNumber' => 'C67890',
            'ma_lop' => 'T1707E',
            'status' => 1
        ], [
            'rollNumber' => 'D00345',
            'ma_lop' => 'T1707E',
            'status' => 1
        ]]);
    }
}
