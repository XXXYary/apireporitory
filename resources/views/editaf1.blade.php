@extends('principal')

@section('contenido')
<h1>Modifica Tutoria</h1>
<br>
    {{Form::open(['route' => 'editaf1'])}}
    {{Form::token()}}
     @if($errors->first('idtt'))
			<i> {{ $errors->first('idtt') }} </i>
		@endif  <br>
    Clave: {{Form::text('idtt',$consulta->idtt,['readonly'])}}

    <br>

    @if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif  <br>
    Nombre: {{Form::text('nombre',$consulta->nombre)}}
    
    <br>
    {{Form::submit('Guardar')}}

@stop