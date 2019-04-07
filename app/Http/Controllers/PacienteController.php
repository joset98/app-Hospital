<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    
    public function index(){
        
        $pacientes = Pacientes::all();

        return view('')->with(compact('pacientes'));
    }


}
