<?php

namespace App\Http\Controllers;

use App\Models\PublicAppModel;

class PublicController extends Controller{
    
    protected $modelPubblico;
    
    public function __construct() {
        $this->modelPubblico = new PublicAppModel(); 
    }
    
    public function showFullCatalog() {
        $events = $this->modelPubblico->getEvents();
        $societies = $this->modelPubblico->getSocieties();
        return view('catalogo')->with('eventi', $events)->with('societies', $societies);
    }

    public function showFAQ(){
        $faq = $this->modelPubblico->getFAQ();
        return view('FAQ')->with('faq', $faq);
    }
}