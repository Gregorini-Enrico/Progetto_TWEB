<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model {

    protected $table = 'faq';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];  // prodId non modificabile da un HTTP Request (Mass Assignment)
    public $timestamps = false;
    
}