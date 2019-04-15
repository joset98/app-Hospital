<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medic extends Model
{
    // medic->personal()
    public function personal(){
           
        return $this->belongsTo('Personal');
       
    }

    public function especialista(){
           
        return $this->hasMany('especialista');
        
    }
}
