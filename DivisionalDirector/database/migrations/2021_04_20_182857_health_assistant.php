<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HealthAssistant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_assistant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('employee_id')->unique();
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('division');
            $table->string('district');
            $table->string('upazilla');
            $table->string('union');
            $table->string('word');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('health_assistant');
    }
}
