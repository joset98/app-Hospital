@extends('admin.admin')


<!-- @section('body-class') -->


@section('content-admin')
<h1>HOLA ESTOY AQUI</h1>
    <div class="row">        
    @foreach($pacientes as $paciente)
            <div class="col-md-4" >
                <div class="team-player">
                <h4 class="nombrep"> {{ $paciente->nombre }} </h4>
        
                </div>
    
            </div>
        @endforeach  
    </div>
          
@endsection
