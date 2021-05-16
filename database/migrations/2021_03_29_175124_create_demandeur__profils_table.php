<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeurProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeur__profils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('demandeur_id')->unsigned();
            $table->foreign('demandeur_id')
            ->references('id')
            ->on('demandeurs')
            ->onDelete('cascade'); 
             $table->bigInteger('profil_id')->unsigned();
            $table->foreign('profil_id')
            ->references('id')
            ->on('profils')
            ->onDelete('cascade'); 
             $table->String('NIVEAU');

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
        Schema::dropIfExists('demandeur__profils');
    }
}
