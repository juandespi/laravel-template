<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('emp_no')->primary();
            $table->integer('id')->increments();
            $table->string('password');
            $table->integer('user_level');
            $table->string('name');
            $table->string('address');
            $table->integer('contact_no');
            $table->string('email');
            $table->string('position');
            $table->string('department');
            $table->string('group');
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
        Schema::dropIfExists('employees');
    }
}
