<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_credits', function (Blueprint $table) {
          $table->integer('emp_no');
          $table->foreign('emp_no')->references('emp_no')->on('leaves');
          $table->decimal('sick_balance');
          $table->decimal('emergency_balance');
          $table->decimal('vacation_balance');
          $table->decimal('mat_pat_balance');
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
        Schema::dropIfExists('leave_credits');
    }
}
