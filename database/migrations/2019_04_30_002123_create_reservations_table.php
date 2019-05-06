<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_chambre');
            $table->unsignedInteger('id_hotel');
            $table->unsignedInteger('id_facture');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->foreign('id_hotel')->references('id')->on('hotels');
            $table->foreign('id_chambre')->references('id')->on('chambres');
            $table->foreign('id_facture')->references('id')->on('factures');
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
        Schema::dropIfExists('reservations');
    }
}
