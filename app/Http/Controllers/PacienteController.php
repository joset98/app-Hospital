<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Persona;


class PacienteController extends Controller
{
    
    public function index(){
        
        $pacientes = Persona::all();

        return view('admin.pacientes.pacientes')->with(compact('pacientes'));
    }


}
