<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partecipazione extends Migration
{
    
    public function up()
    {
        Schema::create('partecipazione', function(Blueprint $table){
            //$table->integer('id_utente')->references('id')->on('account')->index();
            //$table->integer('codice_evento')->references('codice_evento')->on('evento')->index();
            $table->bigInteger('id_utente')->unsigned()->index();
            $table->integer('codice_evento')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('partecipazione');
    }
}
