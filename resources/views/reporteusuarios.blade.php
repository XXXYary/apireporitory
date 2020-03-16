@extends('index')

@section('contenido')

<body>

  <h1>*--Usuarios--*</h1>
<table class="table table-striped table-sm" border='1'>
<thead class="thead-dark">
<tr><th>Clave</th><th>Nombre</th><th>Correo</th><th>Password</th><th>Tipo</th>
  @if(Session::get('sesiontipo') == "ADMIN")
  <th colspan="2">Operaciones</th>
  @elseif(Session::get('sesiontipo') == "DOCENTE")
    <th>Operación</th>
  @endif
</tr>
</thead>
@foreach($consulta as $c)
<tr>
  <td>{{$c->idu}}</td>
  <td>{{$c->nombre}}</td><td>{{$c->correo}}</td><td>{{$c->password}}</td><td>{{$c->tipo}}</td>
  @if($c->activo == 'si')
  @if(Session::get('sesiontipo') == "ADMIN")
  <td>
   <a href="{{URL::action('tutor@modificausuario',['idu'=>$c->idu])}}">
    Modificar</a>
  </td>
  @endif
  @if(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")
  <td>
   <a href="{{URL::action('tutor@eliminau',['idu'=>$c->idu])}}">
    Eliminar</a>
  </td>
  @endif

  @elseif(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")

  <td colspan="2">
   <a href="{{URL::action('tutor@restaurau',['idu'=>$c->idu])}}">
    Restaurar</a>
  </td>

  @endif
@endforeach
</table>
@stop
