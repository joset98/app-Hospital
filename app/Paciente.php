<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Paciente->persona()
    public function persona(){
           
        return $this->belongsTo('Persona', 'foreign_key', 'other_key');
       
    }
}
