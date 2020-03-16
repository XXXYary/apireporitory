@extends('index')

@section('contenido')
<link rel="stylesheet" href={{ asset('estilostabs.css') }}>

    <script src={{ asset('tabs/bootstrap.min.js') }}></script>
	<script src={{ asset('tabs/jquery.min.js') }}></script>


    <section id="tabs">
	<div class="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registro de casos 'CADI'</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                        <center><table>
                                <h1>Alta de Casos("CADI")</h1>

                            <tr>
                                    {{Form::open(['route' => 'guardarcaso'])}}
                                    {{Form::token()}}
                                    <br>
                                    @if($errors->first('idc'))
                                    <i> {{ $errors->first('idc') }} </i>
                                    @endif  <br><br>
                                    Clave: <br> {{Form::text('idc',$idsig,['readonly'])}}
                                </tr>
                                <br>
                                <tr>
                                @if($errors->first('tcaso'))
                                    <i> {{ $errors->first('tcaso') }} </i>
                                @endif	<br> <br>
                                    Tipo de Caso: <br>
                                    <td>{{Form::text('tcaso')}}</td>
                                </tr>
                        </table>
                        <br>
                                <tr>
                                    {{Form::submit('Guardar')}}
                                </tr>
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
