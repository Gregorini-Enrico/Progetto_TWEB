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
    
    public function getYears(){
        $events = Evento::all();
        $i = 0;
        $anni = [];
        foreach ($events as $e){
            $find = false;
            
            //$month=date("F",$this->data);
            $year=(explode("-", $e->data))[0];
            foreach ($anni as $y){
                if ($year == $y){
                    $find = true;
                    break;
                }
            }
            if ($find == false){
                    $anni[$i] = $year;
                    $i = $i + 1;    
            }
        }
        return $anni;
    }
    
    public function getMonths(){
        $events = Evento::all();
        $i = 0;
        $mesi = [];
        foreach ($events as $e){
            $find = false;
          
            //$month=date("F",$this->data);
            $month=(explode("-", $e->data))[1];
            foreach ($mesi as $m){
                if ($month == $m){
                    $find = true;
                    break;
                }
            }
            if ($find == false){
                    $mesi[$i] = $month;
                    $i = $i + 1;    
            }
        }
        return $mesi;
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
    
    public function getEventHome(){
        $eve = $this->getEvents();
        $primoIndice = rand(0, count($eve)-1);
        do{
            $secondoIndice = rand(0, count($eve)-1);
        }while($primoIndice == $secondoIndice);
        return [$eve[$primoIndice], $eve[$secondoIndice]];
    }
}

