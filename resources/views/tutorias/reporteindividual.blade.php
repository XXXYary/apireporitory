@extends('index')

@section('contenido')

<script src={{ asset('tabs/bootstrap.min.js') }}></script>
<script src={{ asset('tabs/jquery.min.js') }}></script>

<link href= {{ asset('estiloreportes.css') }} rel="stylesheet">

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
            <div >
              <div>
                <div>
                  <div class="col-xl-12 col-md-12 col-sl">
                    <div>
                        <h2>Nombre: {{$alumno->nAlumno}} {{$alumno->apAlumno}} {{$alumno->amAlumno}}</h2>
                            <div class="page-content panel-body container-fluid">
                              <table id="reporte" class=" display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                <thead>
                                  {{ csrf_field() }}
                                  <tr>
                                    <th data-toggle="true">Fecha</th>
                                    <th data-hide="phone, tablet">Tutor</th>
                                    <th data-hide="phone, tablet">Motivo</th>
                                    <th data-hide="phone, tablet">Cuatrimestre</th>
                                    <th data-hide="phone, tablet">Status</th>
                                    <th data-hide="phone, tablet">Detalles</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                    <th>Fecha</th>
                                    <th>Tutor</th>
                                    <th>Motivo</th>
                                    <th>Cuatrimestre</th>
                                    <th>Status</th>
                                    <th>Detalles</th>
                                  </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($info as $t)
                                  <tr id="row{{$t->id}}" class="row{{$t->id}}">
                                    <td>{{ $t->fecha }}</td>
                                    <td>{{ $t->nombre }} {{ $t->apellido_paterno }} {{ $t->apellido_materno }} </td>
                                    <td>{{ $t->motivo }}</td>
                                    <td>{{ $t->cuatrimestre }}</td>
                                    <td>{{ $t->status }}</td>
                                    <td>
                                      <a href="/exportpdf/{{$t->id}}"><button type="button"
                                        class="btn btn-icon btn-danger waves-effect waves-light"
                                        data-toggle="tooltip" data-original-title="Generar reporte PDF">
                                        <i class="icon fa-file-pdf-o" aria-hidden="true"></i></button>
                                      </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              <!-- END Table-->
                            </div>

                    </div>
                  </div>
                  <!-- End Example Tabs -->
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
	</div>
</section>          
  <!-- End Panel Basic -->

  @stop

  <script type="text/javascript">
  //inicializa la tabla para resposnive
    $(document).ready(function(){
        $('#product_table_gr').DataTable({
            retrieve: true,
            //  responsive: true,
            //paging: false,
            //searching: false
        });
        $('#product_table_pz').DataTable({
            retrieve: true,
            //responsive: true,
            //paging: false,
            //searching: false
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
              .columns.adjust()
              .responsive.recalc();
        });    
    });
    </script>

  <!-- Función Sweet Alert para eliminar producto-->
  <script type="text/javascript">
  $(document).ready(function () {
  setTimeout(() => {
    console.log("config datatable")
    $('#product_table_gr').on('click', '.delete', function(){
        var id = $(this).attr("alt");
        console.log(id);
        Swal.fire({
          title: 'Confirmación',
          text: "¿Seguro que desea eliminar este registro?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borralo!'
        }).then((result) => {
          if (result.value) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
            });
            $.ajax({
              url: '/productos/' + id,
              method: 'DELETE',
               success: function (response) {
                if(response.success){
                $('#product_table_gr').DataTable()
                .rows('.row' + id)
                .remove()
                .draw();
                Swal.fire(
                  'Eliminado',
                  'El registro ha sido eliminado.',
                  'success'
                )
                }else{
                Swal.fire(
                  'No Eliminado',
                  'El producto no ha sido eliminado por que esta activo en un traspaso',
                  'error'
                )
            }
              },
              error: function () {
                Swal.fire(
                  'Eliminado',
                  'El registro no ha sido eliminado.' + id,
                  'error'
                )
              }
            })
          }
        })
      });
      $('#product_table_pz').on('click', '.delete', function(){
        var id = $(this).attr("alt");
        console.log(id);
        Swal.fire({
          title: 'Confirmación',
          text: "¿Seguro que desea eliminar este registro?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borralo!'
        }).then((result) => {
          if (result.value) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
            });
            $.ajax({
              url: '/productos/' + id,
              method: 'DELETE',
              success: function (response) {
                if(response.success){
                $('#product_table_pz').DataTable()
                .rows('.row' + id)
                .remove()
                .draw();
                Swal.fire(
                  'Eliminado',
                  'El registro ha sido eliminado.',
                  'success'
                )
                }else{
                Swal.fire(
                  'No Eliminado',
                  'El producto no ha sido eliminado por que esta activo en un traspaso',
                  'error'
                )
                }
              },
              error: function () {
                Swal.fire(
                  'Eliminado',
                  'El registro no ha sido eliminado.' + id,
                  'error'
                )
              }
            })
          }
        })
      });
  },500)
  });
  </script>
 