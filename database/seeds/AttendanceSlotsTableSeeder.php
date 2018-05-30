<?php

use Illuminate\Database\Seeder;

class AttendanceSlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_slots')-> insert([[
            'slot_id' => 1,
            'time_slot' => '8h-12h',
            'mon_hoc' => 'PHP',
            'ma_lop' => 'T1707M',
            'ngay' => date("Y-m-d H:i")
        ], [
            'slot_id' => 2,
            'time_slot' => '13h30-17h30',
            'mon_hoc' => 'CSharp',
            'ma_lop' => 'T1707E',
            'ngay' => date("Y-m-d H:i")
        ]]);
    }
}
