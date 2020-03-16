<html>
<body>
<h1> Formulario </h1>
<br>
<form action='{{route('guardarinformacion')}}' method='POST'>
{{csrf_field()}}

		@if($errors->first('nombre'))
			<i> {{ $errors->first('nombre') }} </i>
		@endif  <br>

Nombre <input type = 'text' name='nombre' value="{{old('nombre')}}">
<br>

		@if($errors->first('edad'))
			<i> {{ $errors->first('edad') }} </i>
		@endif  <br>

Edad <input type = 'text' name='edad' value="{{old('edad')}}">
<br>
Sexo <input type = 'radio' name='sexo' value='F' checked> F
<input type = 'radio' name='sexo' value='F'> M

@if($errors->first('correo'))
			<i> {{ $errors->first('correo') }} </i>
		@endif  <br>
<br>
    
Correo <input type = 'text' name='correo' value="{{old('correo')}}">
<br>
Estado <select name='estado'>
		<option value='Mexico'>Mexico</option>
		<option value='Puebla'>Puebla</option>                                   
		<option value='Guadalajara'>Guadalajara</option>
	</select>
<br>
    
@if($errors->first('costo'))
			<i> {{ $errors->first('costo') }} </i>
		@endif  <br>
    
Costo<input type="text" name='costo' value="{{old('costo')}}">
    <br>
    
@if($errors->first('rfc'))
			<i> {{ $errors->first('rfc') }} </i>
		@endif  <br>
    
    
RFC<input type="text" name='rfc' value="{{old('rfc')}}">
    <br>
    
@if($errors->first('telefono'))
			<i> {{ $errors->first('telefono') }} </i>
		@endif  <br>
    
Telefono<input type="text" name='telefono' value="{{old('telefono')}}">

    
    

    
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>