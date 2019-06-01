<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class speciality extends Model
{
    //
    protected $fillable = [
        'tipo_especialidad', 
    ];
    
    public function especialista()
    {
        return $this->belongsTo('Especialista');
    }
}
