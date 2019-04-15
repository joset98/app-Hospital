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
    protected $fillable = [
        'nombre'
    ];

    //Personals->persona()
    public function persona(){
           
        return $this->belongsTo('Persona');
       
    }

    public function medics(){
           
        return $this->hasMany('Medic');
        
    }
}
