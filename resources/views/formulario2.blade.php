@extends('index')

@section('contenido')

	<center><table>
        <h1>Tipo de Concepto</h1>
						 <tr>

            {{Form::open(['route' => 'guardarconcepto'])}}
            {{Form::token()}}
						<br>
            @if($errors->first('idc'))
            <i> {{ $errors->first('idc') }} </i>
            @endif  <br><br>

          Clave: <br>{{Form::text('idc',$idsig,['readonly'])}}
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
