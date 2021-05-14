<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller{
    
    protected $catalogoEventi;
    
    public function __construct() {
        $this->catalogoEventi = new Catalog(); 
    }
    
    public function showFullCatalog() {
        $events = $this->catalogoEventi->getEvents();
        $societies = $this->catalogoEventi->getSocieties();
        return view('catalogo')->with('eventi', $events)->with('societies', $societies);
    }
}