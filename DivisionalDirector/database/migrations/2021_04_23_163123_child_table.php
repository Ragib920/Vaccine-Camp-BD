<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_information', function (Blueprint $table) {
            $table->bigIncrements('child_id');
            $table->string('child_name');
            $table->string('birth_registration_number')->unique();
            $table->string('gender');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('parents_phone_number');            
            $table->string('employee_id');            
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
        Schema::drop('child_information');
    }
}
