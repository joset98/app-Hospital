<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'dni',
        'phone',
        'apellido',
    ];

    //Persona->Pacientes()
    public function pacientes(){
           
        return $this->hasMany('Paciente');
        
    }

    //Persona->Personals()
    public function personals(){
           
        return $this->hasMany('Personal');
        
    }


}
