@extends('index')


@section('contenido')
<!--
<link rel="stylesheet" href={{ asset('tabs/bootstrap.min.css') }}>
-->
<link rel="stylesheet" href={{ asset('estiloforms.css') }}>
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
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Registro</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Datos de tutoria</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Canalización</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<center>
					
					@foreach($tutoria as $t)
					<form action="/tutoriaupdate/{{$t->idt}}" method="get">
					
					<table>

						<tr>
							<td width="100" height="50"></td>
							<td><form action="/tutoriasaltas" method="get">
										Fecha de la tutoria:
							</td>
							<td ><input type="date" name="fecha" required></td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td><input type="hidden" name="matricula" value="{{$t->matricula}}">
								Nombre del estudiante:
							</td>
							<td > {{$t->nombre}} {{$t->apellido_p}} {{$t->apellido_m}}</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Tutor:</td>
							<td >{{Session::get('sesionname')}}</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Tipo de Tutoria:</td>
							<td ><input type="radio" name="tipo" value="Grupal"> Grupal <input type="radio" name="tipo" value="Individual" checked> Individual</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Descripcion de la tutoria:</td>
							<td ><textarea rows="4" cols="50" name="descripcion" required>{{$t->descripcion}}</textarea></td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Acciones:</td>
							<td ><textarea rows="4" cols="50" name="acciones" required>{{$t->acciones}}</textarea> <input type="hidden" name="cesc" value="{{$t->ciclo}}"></td>
							<td width="100" height="50"></td>
						</tr>


					</table>
					</center>
					@endforeach																	
					</div>



					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<center>
						<table>
							<tr>
								<td width="100" height="50"></td>
								<td>Cuatrimestre:</td>
								<td >{{$t->cicloesc}} </td>
								<td width="100" height="50"></td>
							</tr>
							<tr>
								<td width="100" height="50"></td>
								<td>Sexo:</td>
								<td><fieldset required><input type="radio" name="sexo" value="Masculino" checked> M <input type="radio" name="sexo" value="Femenino"> F</fieldset></td>
								<td width="100" height="50"></td>
							</tr>
							<tr>
								<td width="100" height="50"></td>
								<td>Clasificaciones:</td>
								<td ><div class="btn-group" role="group">
										<center>	
										<select name="clasificacion" required>
										@foreach($clasificacion as $clasificacion)
												<option value="{{$clasificacion->idc}}">{{$clasificacion->nombre}}</option>
											@endforeach
										</select>
										</center>
									</div>
								</td>
								<td width="100" height="50"></td>
							</tr>
							<tr>
								<td width="100" height="50"></td>
								<td>Fecha de la Siguiente Tutoria:</td>
								<td><input type="date" name="siguiente" value="{{$t->fechasig}}" required></td>
								<td width="100" height="50"></td>
							</tr>
							<tr>
								<td width="100" height="50"></td>
								<td>Estatus:</td>
								<td><fieldset required>
							
									<input type="radio" name="estatus" value="Activo" > A <input type="radio" name="estatus" value="Cancelado"> C <input type="radio" name="estatus" value="EProceso" checked> EP
								
								</fieldset>
								</td>
								<td width="100" height="50"></td>
							</tr>
							<tr>
								<td width="100" height="50"></td>
								<td>Nombre del Profesor:</td>
								<td><input type="text" name="profesor" value="{{$t->profesor}}"></td>
								<td width="100" height="50"></td>
							</tr>
						</table>
						</center>
            				
					
				</div>
					<!--fin del segundo tab-><!-->

					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<center>
					<table>
						<tr>
							<td width="100" height="50"></td>
							<td>Casos CADI:</td>
							<td ><div class="btn-group" role="group">
									<center>	
									<select name="casos" required>
									@foreach($casos as $c)
											<option value="{{$c->idc}}">{{$c->tcaso}}</option>
									@endforeach
									</select>
									</center>
								</div>
							</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Canalización:</td>
							<td><div class="btn-group" role="group">
									<center>	
									<select name="canalizacion" required>
										<option value="CADI">CADI</option>
										<option value="Tutor">Tutor</option>
										<option value="Director">Director</option>
										<option value="Control Escolar">Control Escolar</option>
										<option value="Abogado">Abogado</option>
									</select>
									</center>
								</div>
							</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Seguimiento:</td>
							<td><fieldset required>
								
									<input type="radio" name="seguimiento" value="Inicial" checked> Entrevista Inicial <input type="radio" name="seguimiento" value="Seguimiento"> Seguimiento 
								
								</fieldset>
							</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Periodo:</td>
							<td><input type="number" name="periodo" min="0" max="100" step="0.1" value="1">  Dias</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Tipo:</td>
							<td>
							<fieldset required>
								
									<input type="radio" name="tipo2" value="Baja" checked> Baja <input type="radio" name="tipo2" value="Seguimiento"> Seguimiento 
								
								</fieldset>
							</td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Evidencia:</td>
							<td><input type="file" name="evidencia"></td>
							<td width="100" height="50"></td>
						</tr>
						<tr>
							<td width="100" height="50"></td>
							<td>Detalles</td>
							<td><textarea rows="4" cols="50" name="detalles" required>{{$t->detalles}}</textarea></td>
							<td width="100" height="50"></td>
						</tr>
					</table>
					</center>
					</div>
					<!--fin de los tabs-><!-->
				</div>
			
			</div>
			
		</div>
		
		<br><br>
		
	</div>
	
	</div>

</section>
<center>
	<input type="submit" class="btn btn-success" value="Registrar Tutoria">
	</center>
						</form>



@stop






