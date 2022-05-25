<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Color;

class Car extends Model
{
    protected $fillable = [
        "numero_telaio",
        "model",
        "porte",
        "data_immatricolazione",
        "brand_id",
        "alimentazione",
        "prezzo",
        "descrizione"
    ];
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function colors(){
        return $this->belongsToMany('App\Color');
    }
}
