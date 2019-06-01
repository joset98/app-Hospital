<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_history extends Model
{
    //ESTA TABLA es el resultado
    //de tratamiento con servicio-operacion
    
    public function servicio()
    {
        return $this->belongsTo('Servicio');
    }

    public function tratamiento()
    {
        return $this->belongsTo('Tratamiento');
    }
}
