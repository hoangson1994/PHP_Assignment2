<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slot_id');
            $table->string('time_slot');
            $table->string('mon_hoc');
            $table->string('ma_lop');
            $table->string('ngay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_slots');
    }
}
