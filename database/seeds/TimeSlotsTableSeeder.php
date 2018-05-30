<?php

use Illuminate\Database\Seeder;

class TimeSlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_slots')-> insert([[
            'slot_id' => 1,
            'thoi_gian' => '8h-12h',
            'created_at' => date("Y-m-d H:i")
        ], [
            'slot_id' => 2,
            'thoi_gian' => '13h30-17h30',
            'created_at' => date("Y-m-d H:i")
        ]]);
    }
}
