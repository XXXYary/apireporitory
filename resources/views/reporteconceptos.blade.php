@extends('index')

@section('contenido')

<body>
  <h1>*--Conceptos--*</h1>
<div class="x_content">
                    <table class="table table-striped table-sm" border='1'>
                      <thead class="thead-dark">
                        <tr>
                          <th>Clave</th>
                          <th>Nombre</th>
                          @if(Session::get('sesiontipo') == "ADMIN")
                            <th colspan="2">Operaciones</th>
                          @elseif(Session::get('sesiontipo') == "DOCENTE")
                            <th>Operación</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
						@foreach($consulta as $c)
						<tr>
  						<td>{{$c->idc}}</td>
						<td>{{$c->nombre}}</td>
            @if($c->activo == 'si')
            @if(Session::get('sesiontipo') == "ADMIN")
            <td>
             <a href="{{URL::action('tutor@modificaconcepto',['idc'=>$c->idc])}}">
              Modificar</a>
            </td>
            @endif
            @if(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")
            <td>
             <a href="{{URL::action('tutor@eliminac',['idc'=>$c->idc])}}">
            	Eliminar</a>
            </td>
            @endif

            @elseif(Session::get('sesiontipo') == "ADMIN" OR Session::get('sesiontipo') == "DOCENTE")

            <td colspan="2">
             <a href="{{URL::action('tutor@restaurac',['idc'=>$c->idc])}}">
              Restaurar</a>
            </td>

            @endif
						@endforeach
                      </tbody>
                    </table>
</table>

@stop
