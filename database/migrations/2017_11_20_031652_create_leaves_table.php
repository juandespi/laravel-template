<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
          $table->integer('emp_no');
          $table->foreign('emp_no')->references('emp_no')->on('employees');
          // $table->date('date_filed');
          $table->string('leave_type');
          $table->dateTime('leave_from');
          $table->dateTime('leave_to');
          $table->text('reason');
          $table->string('status');
          // $table->date('total_cutOffOT');
          $table->boolean('tl_approved');
          $table->boolean('pm_approved');
          $table->boolean('hr_approved');
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
        Schema::dropIfExists('leaves');
    }
}
