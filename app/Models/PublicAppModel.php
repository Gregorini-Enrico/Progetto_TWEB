<?php

namespace App\Models;

use App\Models\Resources\Evento;
use App\Models\Resources\Account;
use App\Models\Resources\FAQ;
use Illuminate\Support\Facades\Log;

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
    
    public function getEvent($eventId){
        Log::debug($eventId);
        return Evento::where('codice_evento', $eventId)->first();
    }
}

