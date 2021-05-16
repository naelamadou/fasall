<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrepriseContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')
            ->references('id')
            ->on('entreprises')
            ->onDelete('cascade'); 
             $table->bigInteger('contrat_id')->unsigned();
            $table->foreign('contrat_id')
            ->references('id')
            ->on('contrats')
            ->onDelete('cascade'); 
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
        Schema::dropIfExists('entreprise_contracts');
    }
}
