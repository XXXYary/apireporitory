@extends('index')

@section('contenido')

<center>
    <table>
        <h1>Alta De Usuarios</h1>
        <tr>
            {{Form::open(['route' => 'guardarusuario'])}}
            {{Form::token()}}
            @if($errors->first('idu'))
            <i> {{ $errors->first('idu') }} </i>
            @endif <br>
            <td> Clave: </td>
        </tr>
        <tr>
            <td> {{Form::text('idu',$idsig,['readonly'])}} </td>
        </tr>
        <tr>
            @if($errors->first('nombre'))
            <i> {{ $errors->first('nombre') }} </i>
            @endif <br>
            <td>Nombre:</td>
        </tr>
        <tr>
            <td>{{Form::text('nombre')}}</td>
        </tr>
        <tr>
            @if($errors->first('correo'))
            <i> {{ $errors->first('correo') }} </i>
            @endif <br>
            <td>Correo:</td>
        </tr>
        <tr>
            <td>{{Form::text('correo')}}</td>
        </tr>
        <tr>
            @if($errors->first('password'))
            <i> {{ $errors->first('password') }} </i>
            @endif <br>
            <td>Password:</td>
        </tr>
        <tr>
            <td>{{Form::text('password')}}</td>
        </tr>
        <tr>
            @if($errors->first('tipo'))
            <i> {{ $errors->first('tipo') }} </i>
            @endif <br>
            <td>Tipo:</td>
        </tr>
        <tr>
            <td>
                <select name="tipo">
                    <option value="ADMIN">ADMIN</option>
                    <option value="DOCENTE">DOCENTE</option>
                    <option value="ALUMNO">ALUMNO</option>
            </td>
        </tr>
    </table>
    <br>
    <tr>
        {{Form::submit('Guardar')}}
    </tr>
</center>
@stop