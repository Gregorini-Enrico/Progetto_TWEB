<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Faq extends Migration
{

    public function up()
    {
        Schema::create('faq', function(Blueprint $table){
            $table->id();
            $table->string('domanda', 200);
            $table->string('risposta', 200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq');
    }
}
