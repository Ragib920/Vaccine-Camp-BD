<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\VaccineModel;
use Illuminate\Http\Request;

class Vaccine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->bigIncrements('vaccine_id');
            $table->string('vaccine_name');
            $table->string('desease_name',1000);
            $table->string('no_of_dose');
            $table->string('intervel_between_doses');
            $table->string('starting_time');
            $table->string('rule_of_administration');
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
        Schema::drop('vaccine');
    }
}
