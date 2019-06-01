<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    //
    protected $fillable = [
        'fecha', 'hora',
    ];

    public function histories()
    {
        return $this->hasMany('History');
    }

    public function cita()
    {
        return $this->belongsTo('Cita');
    }
}
