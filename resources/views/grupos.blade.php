@extends('index')

@section('contenido')
<script src={{ asset('tabs/bootstrap.min.js') }}></script>
	<script src={{ asset('tabs/jquery.min.js') }}></script>
  <link rel="stylesheet" href={{ asset('estilostabs.css') }}>


<section id="tabs">
	<div class="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registrar Tutoria</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<center><table>
        
        <h2>    Grupos Asignados:  </h2><br><br><br>
      @foreach($asignados as $a)
        <tr>
            <td>
              <button class="btn btn-primary" name="id_report" onclick=" location.href='lista-grupo/{{$a->id}}' ">
                  <h2>  Lista Del Grupo {{$a->nombre}} </h2>
              </button>
            </td>
        </tr>
        @endforeach
</table>
<br>
        
</center>
</div>
      </div>
    </div>
  </div>
	</div>
</section>

@stop
