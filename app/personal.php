<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    public function operation_histories()
    {
        return $this->hasMany('operation_history');
    }
    
    //Personals->persona()
    public function persona(){
           
        return $this->belongsTo('Persona');
       
    }

    public function medics(){
           
        return $this->hasOne('Medic');
        
    }
}
