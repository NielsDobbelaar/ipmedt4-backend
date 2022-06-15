<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanlijstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planlijst', function (Blueprint $table) {
            $table->id();
            $table->integer("bedrijfId");
            $table->foreign("bedrijfId")->references("id")->on("alle_bedrijven")->onDelete('cascade');;
            $table->string("reden");
            $table->string("opmerking");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planlijst', function(Blueprint $table){
            $table->dropForeign("planlijst_bedrijfid_foreign");
        });

        Schema::dropIfExists('planlijst');
    }
}
