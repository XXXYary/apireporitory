@extends('index')

@section('contenido')

<center><table>
        <h1>Tipo de tutoria</h1>

       <tr>
            {{Form::open(['route' => 'guardartutoria'])}}
            {{Form::token()}}
            <br>
            @if($errors->first('idtt'))
            <i> {{ $errors->first('idtt') }} </i>
            @endif  <br><br>
            Clave: <br> {{Form::text('idtt',$idsig,['readonly'])}}
        </tr>
        <br>
        <tr>
        @if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif	<br> <br>
            Nombre: <br>
            <td>{{Form::text('nombre')}}</td>
        </tr>
</table>
<br>
        <tr>
            {{Form::submit('Guardar')}}
        </tr>
</center>

@stop
