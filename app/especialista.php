<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialista extends Model
{
    //medic->personal()

    public function personal(){
           
        return $this->belongsTo('Medic');
       
    }

    public function speciality(){

        return $this->hasMany('Speciality');

    }
    
}
