<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')
            ->references('id')
            ->on('entreprises')
            ->onDelete('cascade');
              $table->String('PRISE');
              $table->String('ECHEANCE');
              $table->String('NBRE_MOIS');
              $table->String('ALLOC_MENSUEL');
              $table->String('MONTANT_TOTAL');
              $table->String('CONTRE_PARTIE_MENSUEL');
              $table->String('CONTREPARTIE_ETAT');

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
        Schema::dropIfExists('allocations');
    }
}
