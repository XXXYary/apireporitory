@extends('index')

@section('contenido')

<body>
  <h1>*--Tutorias--*</h1>
<table class="table table-striped table-sm" border='1'>
<thead class="thead-dark">
<tr><th>Clave</th><th>Nombre</th>
  @if(Session::get('sesiontipo') == "ADMIN")
  <th colspan="2">Operaciones</th>
  @elseif(Session::get('sesiontipo') == "DOCENTE")
    <th>Operación</th>
  @endif
</tr>
</thead>
@foreach($consulta as $c)
<tr>
  <td>{{$c->idtt}}</td>
<td>{{$c->nombre}}</td>
@if($c->activo == 'si')
@if(Session::get('sesiontipo') == "ADMIN")
<td>
 <a href="{{URL::action('tutor@modificatutoria',['idtt'=>$c->idtt])}}">
  Modificar</a>
</td>
@endif
@if(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")
<td>
 <a href="{{URL::action('tutor@eliminat',['idtt'=>$c->idtt])}}">
	Eliminar</a>
</td>
@endif

@elseif(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")

<td colspan="2">
 <a href="{{URL::action('tutor@restaurat',['idtt'=>$c->idtt])}}">
  Restaurar</a>
</td>

@endif
@endforeach


</table>
@stop
