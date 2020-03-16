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
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registrar tutoria</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        

            {{Form::open(['route' => 'grupos'])}}
            {{Form::token()}}
            <br>
        <tr>
        @if($errors->first('ciclos'))
			<i> {{ $errors->first('ciclos') }} </i>
		@endif	<br> <br>
            <h2>Seleccione un ciclo escolar</h2>
            <br>
            <td>
              <select name="ngrupo">
                @foreach($ciclos as $c)
                <option value={{$c->id}}>{{$c->ciclo}}</option>
                @endforeach
                </div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        </tr>
        </div>
      </div>
    </div>
  </div>
	</div>
</section>


<br ><button type="button" class="btn btn-primary">{{Form::submit('Siguiente')}}</button>
</br>

</center>

@stop
