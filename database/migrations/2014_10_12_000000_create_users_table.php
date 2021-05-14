<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('cognome', 20);
            $table->string('username', 20);
            $table->string('email', 50);
            $table->integer('livello');
            $table->string('organizzazione', 30)->nullable();
            $table->string('password', 20);
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
            //$table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('account');
    }
}
