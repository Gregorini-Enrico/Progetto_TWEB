<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcquistoBiglietto extends Migration
{
    
    public function up()
    {
        Schema::create('acquisto_biglietto', function(Blueprint $table){
            //$table->integer('id_utente')->references('id')->on('account');
            //$table->integer('codice_evento')->references('codice_evento')->on('evento');
            $table->bigInteger('id_utente')->unsigned()->index();
            $table->integer('codice_evento')->index();
            $table->integer('n_biglietti');
            $table->date('data_acquisto');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('acquisto_biglietto');
    }
}
