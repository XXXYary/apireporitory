@extends('principal')

@section('contenido')
<h1>Modificacion Maestro</h1>
<br>
    {{Form::open(['route' => 'editamaestro'])}}
    {{Form::token()}}
     @if($errors->first('idm'))
			<i> {{ $errors->first('idm') }} </i>
		@endif  <br>
    Clave: {{Form::text('idm',$consulta->idm,['readonly'])}}

    <br>

    @if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif  <br>
    Nombre: {{Form::text('nombre',$consulta->nombre)}}

    <br>

    @if($errors->first('apellido'))
			<i> {{ $errors->first('apellido') }} </i>
		@endif  <br>
    Apellido: {{Form::text('apellido',$consulta->apellido)}}

    <br>

    @if($errors->first('edad'))
			<i> {{ $errors->first('edad') }} </i>
		@endif  <br>
    Edad: {{Form::text('edad',$consulta->edad)}}

    <br>

    Selecciona la Carrera
    <br>
    <select name = 'idc'>
      <option value ='{{$idcsel}}'>{{$nomcar}}</option>
      @foreach ($carreras as $c)
      <option value ='{{$c->idc}}'>{{$c->nombre}}</option>
      @endforeach
    <br>
    <br>
    {{Form::submit('Guardar')}}

@stop
