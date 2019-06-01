<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic extends Model
{
    
    //
    
    // public function consultas()
    // {
    //     //return $this->belongsToMany('Consulta');
    //     return $this->belongsToMany('Consulta');
    // }

    protected $fillable = [
        'tipo_enfermedad',
    ];

    public function historiess()
    {
        return $this->hasMany('History');
    }

    public function tratamiento()
    {
        return $this->belongsTo('Tratamiento');
    }
}
