<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Tutorias</title>
     <link href= {{ asset('bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
   <style>
   @media print {
     html,body{
        font-size: 9.5pt;
        margin: 0;
        padding: 0;
     }.page-break {
       page-break-before:always;
       width: auto;
       margin: auto;
      }
    }
    .page-break{
      width: 980px;
      margin: 0 auto;
    }
     .sale-head{
       margin: 40px 0;
       text-align: center;
     }.sale-head h1,.sale-head strong{
       padding: 10px 20px;
       display: block;
     }.sale-head h1{
       margin: 0;
       border-bottom: 1px solid #212121;
     }.table>thead:first-child>tr:first-child>th{
       border-top: 1px solid #000;
      }
      table thead tr th {
       text-align: center;
       border: 1px solid #ededed;
     }table tbody tr td{
       vertical-align: middle;
     }.sale-head,table.table thead tr th,table tbody tr td,table tfoot tr td{
       border: 1px solid #212121;
     }.sale-head h1,table thead tr th,table tfoot tr td{
       background-color: #f8f8f8;
     }tfoot{
       color:#000;
       text-transform: uppercase;
       font-weight: 500;
     }
   </style>
</head>
<body>
<div class="page-content">
<img align="left" src= {{ asset('images/utvtlogo.png') }}  class="img-circle profile_img">
    <div class="panel">
    <h4 align="center">Universidad Tecnologica del Valle de Toluca</h4><br>
    <h4 align="center">Direccion De Carrera De Tecnologias De La Informacion Y Comunicacion</h4><br><br>
    <h4 align="center">Registro De Tutorias</h4>
    @foreach($tutorias as $t)
    <h4 align="left">Nombre Del Estudiante: {{$t->nombre}} {{$t->apellido_paterno}} {{$t->apellido_materno}} </h4> <h4 align="right">Grupo: {{$t->grupo}} </h4>
      <br>
      <h4 align="left">Tutor: {{$t->usuarion}} {{$t->usuarioap}} {{$t->usuarioam}} </h4>
        <br>
        <h4 align="left">Profesor: {{$t->profesor}} </h4>
        <br>
      <h4 align="left">Tipo de Tutoria: {{$t->tipo}} </h4>
      @endforeach
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Forma</th>
                <th scope="col">Descripcion de la Situacion</th>
                <th scope="col">Acciones</th>
                <th scope="col">Firma del Estudiante o Interlocutor del Grupo</th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>{{ $t->fecha }}</td>
                    <td>        </td>
                    <td>{{ $t->descripcion }}</td>
                    <td>{{ $t->acciones }}</td>
                    <td>        </td>
                  </tr>
              </tbody>
            </table>

            <br><br>
        
        <center> Tutor </center>
        <br>
        <hr style="color: #000000" width=40 />
          </div>
          
        </div>
        
          

    </body>
</html>



