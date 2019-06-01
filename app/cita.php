<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    //

    protected $fillable = [
        'fecha','hora',
    ];


    public function consulta()
    {
        return $this->hasOne('Consulta');
    }

    public function paciente()
    {
        return $this->belongsTo('Paciente');
    }
    
    public function medic()
    {
        return $this->belongsTo('Medic');
    }
}
