<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    //tabla intermedia entre consulta y diagnostic 
    
    
    public function consulta()
    {
        return $this->belongsTo('Consulta');
    }

    public function diagnostic()
    {
        return $this->belongsTo('Diagnostic');
    }
}
