<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    protected $table = 'evento';
    protected $primaryKey = 'codice_evento';
    protected $guarded = ['codice_evento'];  // prodId non modificabile da un HTTP Request (Mass Assignment)
    public $timestamps = false;

    public function getDiscount() {
        $price = $this->costo_biglietto;
        //verifica che la data di inizio sconto non sia "maggiore" della data attuale nello stesso formato ('Y-m-d')
        if ($this->data_inizio_sconto  >= now()->toDateTimeString('Y-m-d')) { 
            $discount = ($price * $this->sconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }
}



