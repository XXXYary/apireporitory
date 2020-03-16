<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
</head>
<body>
<h1> Mi formulario</h1>
<?php
echo Form::open(['route' => 'prueba','files' => true]);
?>
{{Form::token()}}
<br>
<table ><tr><td>
         @if($errors->first('nombre')) 
			<i> {{ $errors->first('nombre') }} </i> 
		@endif
Nombre Alumno</td><td>{{Form::text('nombre',old('nombre'), ['class' => 'col-lg-2 control-label'])}}
</td></tr>
<tr><td>Sexo:</td><td>
<div class="form-group">
            {!! Form::label('radios', 'Radios', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="radio">
                    {!! Form::label('radio1', 'This is option 1.') !!}
                    {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}
 
                </div>
                <div class="radio">
                    {!! Form::label('radio2', 'This is option 2.') !!}
                    {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
                </div>
            </div>
        </div></td></tr>
		<tr><td>
		<div class="form-group">
            {!! Form::label('select', 'Selecciona Tamaño', ['class' => 'col-lg-2 control-label'] )  !!}
            </td><td><div class="col-lg-10">
                {!!  Form::select('select', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
            </div></td>
        </div></tr>
		<tr><td colspan =2 align = 'rigth'>
{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
</td></tr></table>
</body>
</html>







