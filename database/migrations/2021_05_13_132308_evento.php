<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Evento extends Migration
{
    
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->integer('codice_evento')->primary();
            $table->string('titolo', 50);
            $table->string('luogo', 20);
            $table->string('descrizione', 1000);
            $table->string('immagine', 50);
            $table->string('iframe', 200);
            $table->date('data');
            $table->integer('sconto');
            $table->float('costo_biglietto');
            $table->integer('num_biglietti');
            $table->date('data_inizio_sconto');
            $table->bigInteger('id_user3')->index()->unsigned();
            $table->foreign('id_user3')->references('id')->on('account');
        });
    }

    
    public function down()
    {
            Schema::dropIfExists('evento');
    }
}
