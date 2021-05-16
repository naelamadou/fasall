<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NOM');
            $table->string('activite');
            $table->integer('nombre');
            $table->string('TEL');
            $table->string('ADRESSE');
            $table->string('EMAIL');
            $table->string('NINEA');
            $table->string('REGIT_COMMERCE');
            $table->text('NOM_FICHIER_DEMANDE');
            $table->text('FILE');
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
        Schema::dropIfExists('entreprises');
    }
}
