<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partecipazione extends Migration
{
    
    public function up()
    {
        Schema::create('partecipazione', function(Blueprint $table){
            $table->bigInteger('id_utente')->unsigned()->index();
            $table->integer('codice_evento')->index();
            $table->foreign('id_utente')->references('id')->on('account');
            $table->foreign('codice_evento')->references('codice_evento')->on('evento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('partecipazione');
    }
}
