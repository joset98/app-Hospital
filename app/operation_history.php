<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operation_history extends Model
{
    //ESTA TABLA es el resultrado
    //de personal con servicio-operacion

    public function personal()
    {
        return $this->belongsTo('Personal');
    }

    public function servicio()
    {
        return $this->belongsTo('Servicio');
    }
}
