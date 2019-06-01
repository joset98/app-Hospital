<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    //
    protected $fillable = [
        'ombre', 
        'description',
    ];
    public function service_histories()
    {
        return $this->hasMany('Service_History');
    }

    public function operation_histories()
    {
        return $this->hasMany('Operation_History');
    }

}
