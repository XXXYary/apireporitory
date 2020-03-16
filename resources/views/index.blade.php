<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href= {{ asset('images/favicon.ico') }} type="image/ico" />

    <!-- Bootstrap -->
    <link href= {{ asset('bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font Awesome -->
    <link href= {{ asset('font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <!-- NProgress -->
    <link href= {{ asset('nprogress/nprogress.css') }} rel="stylesheet">
    <!-- iCheck -->
    <link href= {{ asset('iCheck/skins/flat/green.css') }} rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href= {{ asset('bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }} rel="stylesheet">
    <!-- JQVMap -->
    <link href= {{ asset('jqvmap/dist/jqvmap.min.css') }} rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href= {{ asset('bootstrap-daterangepicker/daterangepicker.css') }} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href= {{ asset('css/custom.min.css') }} rel="stylesheet">

    <title>Sistema De Tutorias</title>

    <link rel="apple-touch-icon" href={{{url('/assets/images/apple-touch-icon.png')}}}>
    <link rel="shortcut icon" href={{{url('/assets/images/favicon.ico')}}}>

    <!-- Stylesheets -->
    <link rel="stylesheet" href={{{url('global/css/bootstrap-extend.min.css')}}}>
    <link rel="stylesheet" href={{{url('/assets/css/site.min.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/select2/select2.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/editable-table/editable-table.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/icheck/icheck.css')}}}>
  <link rel="stylesheet" href={{{url('assets/examples/css/forms/advanced.css')}}}>

    <!-- Plugins -->
     <link rel="stylesheet" href={{{url('global/vendor/animsition/animsition.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/asscrollable/asScrollable.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/switchery/switchery.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/intro-js/introjs.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/slidepanel/slidePanel.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/flag-icon-css/flag-icon.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/waves/waves.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/jvectormap/jquery-jvectormap.css')}}}>
    <link rel="stylesheet" href={{{url('assets/examples/css/dashboard/v1.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/blueimp-file-upload/jquery.fileupload.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/dropify/dropify.css')}}}>
    <!-- Fonts -->
    <link rel="stylesheet" href={{{url('global/fonts/material-design/material-design.min.css')}}}>
    <link rel="stylesheet" href={{{url('global/fonts/brand-icons/brand-icons.min.css')}}}>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href={{{url('global/fonts/font-awesome/font-awesome.css')}}}>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="stylesheet" href="{{{url('/global/css/bootstrap-extend.min.css')}}}">
    <!--<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>-->
    <!--Ligbox-->
    <link rel="stylesheet" href="{{{url('assets/examples/css/advanced/lightbox.css')}}}">
    <link rel="stylesheet" href="{{{url('global/vendor/magnific-popup/magnific-popup.css')}}}">

    <!--DATA TABLES CSS-->
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}}>
    <link rel="stylesheet" href={{{url('assets/examples/css/tables/datatable.css')}}}>
    <!--DATE PICKER-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]-->
    <script src={{{url('global/vendor/html5shiv/html5shiv.min.js')}}}></script>
    <!--[endif]-->

    <!--[if lt IE 10]-->
    <script src={{{url('global/vendor/media-match/media.match.min.js')}}}></script>
    <script src={{{url('global/vendor/respond/respond.min.js')}}}></script>
    <!--[endif]-->

    <!-- Scripts -->
    <script src={{{url('global/vendor/breakpoints/breakpoints.js')}}}></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="/index" class="site_title"><span>Bienvenido(a)</span>
                  <div class="profile_pic">
                    <img src= {{ asset('images/utvtlogo.png') }}  alt="..." class="img-circle profile_img">
                  </div>
                </a>
                
            </div>
           
            <div class="clearfix"></div>
            
            <!-- menu profile quick info -->
            <center>
            <div class="profile clearfix">
              <div class="profile_info">
                <span> {{Session::get('sesionname')}} :</span>
                
                <span>{{Session::get('sesiontipo')}} </span>
                <br>
                <button>
                  <a  style="color:black;" href="{{URL::action('AccesoSistema@cerrarsesion')}}"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                </button>
              </div>
            </div>
            </center>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/index"><i class="fa fa-home">Inicio</i> </a>

                  </li>
                  @if(Session::get('sesiontipo') == "PTC")
                  <li><a><i class="fa fa-edit">Tutorias</i>    <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/cicloescolar">Tutoria Individual</a></li>
                      <li><a href="/reportestuto">Reportes Tutoria Individual</a></li>
                      <li><a href="/caso">Alta de Casos</a></li>
                    </ul>
                  </li>
                  @endif


                  @if(Session::get('sesiontipo') == "Administrador")
                  <li><a><i class="fa fa-edit">Altas</i><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="/formulario2">Conceptos</a></li>
                       <li><a href="/formulario3">Usuarios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop">Reportes</i>  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/reportetutoria">Tutorias</a></li>
                      <li><a href="/reporteconceptos">Conceptos</a></li>
                      <li><a href="/reporteusuarios">Usuarios</a></li>
                    </ul>
                  </li>
                  @endif
                </ul>
              </div>

            </div>

          </div>
        </div>




        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
         <!--Aqui va la parte de blanco-->
                  @yield('contenido')
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Derechos Reservados<br>
            Universidad Tecnologica del Valle de Toluca
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src= {{ asset('jquery/dist/jquery.min.js') }} ></script>
    <!-- Bootstrap -->
    <script src= {{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }} ></script>
    <!-- FastClick -->
    <script src= {{ asset('fastclick/lib/fastclick.js') }} ></script>
    <!-- NProgress -->
    <script src= {{ asset('nprogress/nprogress.js') }} ></script>
    <!-- Chart.js -->
    <script src= {{ asset('Chart.js/dist/Chart.min.js') }} ></script>
    <!-- gauge.js -->
    <script src= {{ asset('gauge.js/dist/gauge.min.js') }} ></script>
    <!-- bootstrap-progressbar -->
    <script src= {{ asset('bootstrap-progressbar/bootstrap-progressbar.min.js') }} ></script>
    <!-- iCheck -->
    <script src= {{ asset('iCheck/icheck.min.js') }} ></script>
    <!-- Skycons -->
    <script src= {{ asset('skycons/skycons.js') }} ></script>
    <!-- Flot -->
    <script src= {{ asset('Flot/jquery.flot.js') }} ></script>
    <script src= {{ asset('Flot/jquery.flot.pie.js') }} ></script>
    <script src= {{ asset('Flot/jquery.flot.time.js') }} ></script>
    <script src= {{ asset('Flot/jquery.flot.stack.js') }} ></script>
    <script src= {{ asset('Flot/jquery.flot.resize.js') }} ></script>
    <!-- Flot plugins -->
    <script src= {{ asset('flot.orderbars/js/jquery.flot.orderBars.js') }} ></script>
    <script src= {{ asset('flot-spline/js/jquery.flot.spline.min.js') }} ></script>
    <script src= {{ asset('flot.curvedlines/curvedLines.js') }} ></script>
    <!-- DateJS -->
    <script src= {{ asset('DateJS/build/date.js') }} ></script>
    <!-- JQVMap -->
    <script src= {{ asset('jqvmap/dist/jquery.vmap.js') }} ></script>
    <script src= {{ asset('jqvmap/dist/maps/jquery.vmap.world.js') }} ></script>
    <script src= {{ asset('jqvmap/examples/js/jquery.vmap.sampledata.js') }} ></script>
    <!-- bootstrap-daterangepicker -->
    <script src= {{ asset('moment/min/moment.min.js') }} ></script>
    <script src= {{ asset('bootstrap-daterangepicker/daterangepicker.js') }} ></script>

    <!-- Custom Theme Scripts -->
    <script src= {{ asset('js/custom.min.js') }} ></script>

  </body>
</html>
