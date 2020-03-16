<html>
<head>
<-- CSS, BOOTSTRAP, JS, JQUERY
</head>
<body>
<div id = 'encabezado'>
  LOGO  NOMBRE DE LA EMPRESA  / PROYECTO
</div>
<div id = 'menu'>
  Productos
    -Altas
    -Bajas
    -Consultas
    -Reportes
  <br>
  Clientes
  <br>
  Maestros
</div>
<div id = 'cuerpo'>
  @yield('contenido')
</div>
</body>
</html>
