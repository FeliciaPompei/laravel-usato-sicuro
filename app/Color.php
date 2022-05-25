<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Color extends Model
{
    public function cars(){
        return $this->belongsToMany('App\Car');
    }
}
