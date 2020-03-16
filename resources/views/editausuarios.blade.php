@extends('principal')

@section('contenido')
<h1>Modifica Usuarios</h1>
<br>
    {{Form::open(['route' => 'guardarusuarios'])}}
    {{Form::token()}}
     @if($errors->first('idu'))
			<i> {{ $errors->first('idu') }} </i>
		@endif  <br>
    Clave: {{Form::text('idu',$consulta->idu,['readonly'])}}

    <br>

    @if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif  <br>
    Nombre: {{Form::text('nombre',$consulta->nombre)}}

    <br>

    @if($errors->first('correo'))
            <i> {{ $errors->first('correo') }} </i>
        @endif  <br>
    Correo: {{Form::text('correo',$consulta->correo)}}

    <br>

    @if($errors->first('password'))
            <i> {{ $errors->first('password') }} </i>
        @endif  <br>
    Password: {{Form::text('password',$consulta->password)}}

    <br>

    @if($errors->first('tipo'))
            <i> {{ $errors->first('tipo') }} </i>
        @endif  <br>
    Tipo: {{Form::text('tipo',$consulta->tipo)}}

    <br>
    {{Form::submit('Guardar')}}

@stop