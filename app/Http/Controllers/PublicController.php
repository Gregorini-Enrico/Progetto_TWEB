<?php

namespace App\Http\Controllers;

use App\Models\PublicAppModel;
use Illuminate\Support\Facades\Log;

class PublicController extends Controller{
    
    protected $PublicModel;
    
    public function __construct() {
        $this->PublicModel = new PublicAppModel(); 
    }
    
    public function showFullCatalog() {
        $events = $this->PublicModel->getEvents();
        $societies = $this->PublicModel->getSocieties();
        //Aggiunta lettura da db di anno e mese
        $anni = $this->PublicModel->getYears();
        $mesi = $this->PublicModel->getMonths();
        
        return view('catalogo')->with('eventi', $events)->with('societies', $societies) ->with('years', $anni) ->with('months', $mesi);    
    }

    public function showFAQ(){
        $faq = $this->PublicModel->getFAQ();
        return view('FAQ')->with('faq', $faq);
    }
    
    public function showEvent($eventId){
        $event = $this->PublicModel->getEvent($eventId);
        return view('evento')->with('event', $event);
    }
    
    public function showEventHome(){
        $event = $this->PublicModel->getEventHome();
        return view('Homepage') -> with('events', $event);
    }
}