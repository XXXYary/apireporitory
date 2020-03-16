@extends('principal')

@section('contenido')
<h1>Modifica Conceptos</h1>
<br>
    {{Form::open(['route' => 'guardarconceptos'])}}
    {{Form::token()}}
     @if($errors->first('idc'))
			<i> {{ $errors->first('idc') }} </i>
		@endif  <br>
    Clave: {{Form::text('idc',$consulta->idc,['readonly'])}}

    <br>

    @if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif  <br>
    Nombre: {{Form::text('nombre',$consulta->nombre)}}

    <br>
    {{Form::submit('Guardar')}}

@stop