<?php

namespace App\Models;

use App\Models\Resources\Evento;
use App\Models\Resources\Account;
use App\Models\Resources\FAQ;

class PublicAppModel{

    public function getEvents(){
        return Evento::all();
    }
    
    public function getSocieties(){
        return Account::where('livello', 3)->get();
    }
    
    public function getFAQ(){
        return FAQ::all();
    }
}

