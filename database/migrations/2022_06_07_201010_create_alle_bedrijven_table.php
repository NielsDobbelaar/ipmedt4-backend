<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlleBedrijvenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alle_bedrijven', function (Blueprint $table) {
            $table->integer('id');
            $table->string('mil_locationname');
            $table->string('mil_type');
            $table->string('mil_activity');
            $table->string('mil_activitycode');
            $table->string('kvk_businessnumber');
            $table->string('kvk_activitycode');
            $table->string('kvk_activity');
            $table->string('bag_number');
            $table->string('bag_usage');
            $table->string('vest_name');
            $table->string('vest_activity');
            $table->string('vest_activitycode');
            $table->string('vest_employeescode');
            $table->string('woz_number');
            $table->string('woz_usage');
            $table->string('woz_size_normalized');
            $table->string('longitude');
            $table->string('latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alle_bedrijven');
    }
}
