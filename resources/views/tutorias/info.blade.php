@extends('index')

@section('contenido')
<link rel="stylesheet" href={{ asset('estilostabs.css') }}>

    <script src={{ asset('tabs/bootstrap.min.js') }}></script>
	<script src={{ asset('tabs/jquery.min.js') }}></script>
	<script>
		document.style.css
	</script>



<section id="tabs">
	<div class="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informacion del alumno</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

          <center>
          <table >
            <tr >
              <td width="90" height="50"></td>
              <td>Matricula:</td>
              <td>{{$alumno->matricula}}</td>
              <td width="90" height="50"></td>
            </tr>
            <tr>
              <td width="90" height="50"></td>
              <td>Nombre:</td>
              <td >{{$alumno->nAlumno}}</td>
              <td width="90" height="50"></td>
            </tr>
            <tr>
              <td width="90" height="50"></td>
              <td>Apellido Paterno:</td>
              <td >{{$alumno->apAlumno}}</td>
              <td width="90" height="50"></td>
            </tr>
            <tr>
              <td width="90" height="50"></td>
              <td>Apellido Materno: </td>
              <td >{{$alumno->amAlumno}}</td>
              <td width="90" height="50"></td>
            </tr>
            <tr >
                <td width="90" height="50"></td>
                <td>Sexo:</td>
                <td>{{$alumno->sexo}}</td>
                <td width="90" height="50"></td>
              </tr>
              <tr>
                <td width="90" height="50"></td>
                <td>Estado Civil:</td>
                <td >{{$alumno->edocivil}}</td>
                <td width="90" height="50"></td>
              </tr>
              <tr>
                <td width="90" height="50"></td>
                @if($alumno->celular)
                <td>Celular:</td>
                <td >{{$alumno->celular}}</td>
                @endif
                <td width="90" height="50"></td>
              </tr>
              <tr>
                <td width="90" height="50"></td>
                @if($alumno->correo)
                <td>Correo:</td>
                <td >{{$alumno->correo}}</td>
                @endif
                <td width="90" height="50"></td>
              </tr>

          </table>
          </center>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        </tr>
        </div>
      </div>
    </div>
  </div>
	</div>
</section>          

  @stop
