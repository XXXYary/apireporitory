@extends('index')

@section('contenido')
<script src={{ asset('tabs/bootstrap.min.js') }}></script>
	<script src={{ asset('tabs/jquery.min.js') }}></script>
 <link rel="stylesheet" href={{ asset('estilolista.css') }}>
  


<section id="tabs">
  <div class="fondo">
	<div class="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><h4>Listado del grupo</h4></a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


              <h2>@foreach($ciclo as $c)Grupo {{$c->nombre}} @endforeach<br>@foreach($ciclo as $c)  Cuatrimestre {{$c->cicloesc}} @endforeach<h2>
              <br>
              <table class="table table-hover" border='1'><tr><td>Matricula</td><td>Nombre Completo</td><td>Detalles</td></tr>
              @foreach($asignados as $c)
              <tr><td>{{$c->matricula}}</td><td>{{$c->nombre}} {{$c->apellido_paterno}} {{$c->apellido_materno}}</td>
                <td>
                  @foreach($ciclo as $a)
                <a href="/tutoriaindi/{{$c->matricula}}/{{$a->idcesc}}"><button type="button"
                    class="btn btn-icon btn-danger waves-effect waves-light"
                    data-toggle="tooltip" data-original-title="Registrar Tutoria">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i></button>
                  </a>
                  @endforeach
                  <a href="/infoalumno/{{$c->matricula}}"><button type="button"
                    class="btn btn-icon btn-danger waves-effect waves-light"
                    data-toggle="tooltip" data-original-title="Informacion de Alumno">
                    <i class="glyphicon glyphicon-user" aria-hidden="true"></i></button>
                  </a>
                  <a href="/reporteindividual/{{$c->matricula}}"><button type="button"
                    class="btn btn-icon btn-danger waves-effect waves-light"
                    data-toggle="tooltip" data-original-title="Reporte de Tutoria">
                    <i class="glyphicon glyphicon-align-justify" aria-hidden="true"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
              </table>
          </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>

@stop
