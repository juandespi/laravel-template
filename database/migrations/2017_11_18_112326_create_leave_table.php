<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave', function (Blueprint $table) {
            $table->integer('emp_no');
            $table->foreign('emp_no')->references('emp_no')->on('employee');
            // $table->date('date_filed');
            $table->string('leave_type');
            $table->dateTime('leave_from');
            $table->dateTime('leave_to');
            $table->text('reason');
            $table->string('status');
            // $table->date('total_cutOffOT');
            $table->string('tl_response');
            $table->string('pm_response');
            $table->string('hr_response');
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
        Schema::dropIfExists('leave');
    }
}
