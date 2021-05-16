<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')
            ->references('id')
            ->on('entreprises')
            ->onDelete('cascade'); 
             $table->bigInteger('demandeur_id')->unsigned();
            $table->foreign('demandeur_id')
            ->references('id')
            ->on('demandeurs')
            ->onDelete('cascade'); 
             $table->String('date_fin');
             $table->String('PERIODE');
             $table->String('DUREE');
             $table->String('ContrepartieEtat');
             $table->String('ContrepartieEntreprise');
             

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
        Schema::dropIfExists('contrats');
    }
}
