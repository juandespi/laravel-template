<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOvertimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime', function (Blueprint $table) {
            $table->integer('emp_no');
            $table->foreign('emp_no')->references('emp_no')->on('employee');
            // $table->date('date_filed');
            $table->string('ot_type');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->boolean('no_break');
            $table->decimal('total_hours', 11, 2);
            $table->text('reason');
            $table->string('status');
            // $table->date('total_cutOffOT');
            $table->string('tl_response');
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
        Schema::dropIfExists('overtime');
    }
}
