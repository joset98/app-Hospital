<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamiento extends Model
{
    //
    protected $fillable = [
        'description',
    ];

    public function service_histories()
    {
        return $this->hasMany('Service_History');
    }

    public function diagnostics()
    {
        return $this->hasMany('Service_History');
    }


}
