<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexadmin','marca@indexadmin')->name('indexadmin');
Route::get('/sobre','marca@sobre')->name('sobre');


Route::POST('/registroexito','pagina@registroexito')->name('registroexito');
Route::POST('/exitoso','pagina@exitoso')->name('exitoso');
Route::POST('/Tarjeta','pagina@Tarjeta')->name('Tarjeta');
Route::POST('/verificar','pagina@verificar')->name('verificar');
Route::get('/iniciodesesion','pagina@iniciodesesion')->name('iniciodesesion');
Route::POST('/cerrar','pagina@cerrar')->name('cerrar');
Route::POST('/indexinicio','pagina@indexinicio')->name('indexinicio');
Route::POST('/rentas','pagina@rentas')->name('rentas');
Route::POST('/registros','pagina@registros')->name('registros');
Route::get('/contactoinicio','pagina@contactoinicio')->name('contactoinicio');
Route::get('/misioninicio','pagina@misioninicio')->name('misioninicio');
Route::get('/reservas','pagina@reservas')->name('reservas');
Route::get('/ubicacioninicio','pagina@ubicacioninicio')->name('ubicacioninicio');
Route::get('/visioninicio','pagina@visioninicio')->name('visioninicio');
Route::get('/cochesmedianainicio','pagina@cochesmedianainicio')->name('cochesmedianainicio');
Route::get('/cochesaltoinicio','pagina@cochesaltoinicio')->name('cochesaltoinicio');
Route::get('/cochesbajainicio','pagina@cochesbajainicio')->name('cochesbajainicio');
Route::get('/cochesalto','pagina@cochesalto')->name('cochesalto');
Route::get('/cochesbaja','pagina@cochesbaja')->name('cochesbaja');
Route::get('/cochesmediana','pagina@cochesmediana')->name('cochesmediana');
Route::get('/contacto','pagina@contacto')->name('contacto');
Route::get('/ubicacion','pagina@ubicacion')->name('ubicacion');
Route::get('/index','pagina@index')->name('index');
Route::get('/cochesmedianapopup','pagina@cochesmedianapopup')->name('cochesmedianapopup');
Route::get('/cochesbajapopup','pagina@cochesbajapopup')->name('cochesbajapopup');
Route::get('/cochesaltopopup','pagina@cochesaltopopup')->name('cochesaltopopup');
Route::get('/mision','pagina@mision')->name('mision');
Route::get('/vision','pagina@vision')->name('vision');

Route::get('/altamarca','marca@altamarca')->name('altamarca');

Route::POST('/guardarmarca','marca@guardarmarca')->name('guardarmarca');
Route::get('/reportemarca','marca@reportemarca')->name('reportemarca');
Route::get('/eliminam/{id_mar}','marca@eliminam')->name('eliminam');
Route::get('/restadmin/{id_mar}','marca@restadmin')->name('restadmin');
Route::POST('/editamarca','marca@editamarca')->name('editamarca');
Route::get('/modificamarca/{id_mar}','marca@modificamarca')->name('modificamarca');


Route::POST('/editacliente','cliente@editacliente')->name('editacliente');
Route::get('/modificacliente/{id_cli}','cliente@modificacliente')->name('modificacliente');
Route::get('/altacliente','cliente@altacliente')->name('altacliente');
Route::POST('/guardarcliente','cliente@guardarcliente')->name('guardarcliente');
Route::get('/reportecliente','cliente@reportecliente')->name('reportecliente');
Route::get('/eliminaclient/{id_cli}','cliente@eliminaclient')->name('eliminaclient');
Route::get('/resetclient/{id_cli}','cliente@resetclient')->name('resetclient');


Route::get('/altaadministrador','administrador@altaadministrador')->name('altaadministrador');
Route::POST('/guardaradministrador','administrador@guardaradministrador')->name('guardaradministrador');
Route::get('/reporteadministrador','administrador@reporteadministrador')->name('reporteadministrador');
Route::get('/eliminadmin/{id_ad}','administrador@eliminadmin')->name('eliminadmin');
Route::get('/restadministrador/{id_ad}','administrador@restadministrador')->name('restadministrador');
Route::get('/modificadmin/{id_ad}','administrador@modificadmin')->name('modificadmin');
Route::POST('/editaadmin','administrador@editaadmin')->name('editaadmin');


Route::get('/altacoche','coche@altacoche')->name('altacoche');
Route::POST('/guardarcoche','coche@guardarcoche')->name('guardarcoche');
Route::get('/reportecoche','coche@reportecoche')->name('reportecoche');
Route::get('/eliminacoche/{id_co}','coche@eliminacoche')->name('eliminacoche');
Route::get('/restcoche/{id_co}','coche@restcoche')->name('restcoche');
Route::POST('/editacoche','coche@editacoche')->name('editacoche');
Route::get('/modificacoche/{id_co}','coche@modificacoche')->name('modificacoche');


Route::get('/altacategoria','categoria@altacategoria')->name('altacategoria');
Route::POST('/guardarcategoria','categoria@guardarcategoria')->name('guardarcategoria');
Route::get('/reportecategoria','categoria@reportecategoria')->name('reportecategoria');
Route::get('/eliminacategoria/{id_cat}','categoria@eliminacategoria')->name('eliminacategoria');
Route::get('/restorecategoria/{id_cat}','categoria@restorecategoria')->name('restorecategoria');
Route::POST('/editacategoria','categoria@editacategoria')->name('editacategoria');
Route::get('/categoriamodefi/{id_cat}','categoria@categoriamodefi')->name('categoriamodefi');


Route::get('/altasucursal','sucursal@altasucursal')->name('altasucursal');
Route::POST('/guardarsucursal','sucursal@guardarsucursal')->name('guardarsucursal');
Route::get('/reportesucursal','sucursal@reportesucursal')->name('reportesucursal');
Route::get('/eliminasuc/{id_suc}','sucursal@eliminasuc')->name('eliminasuc');
Route::get('/restaurarsucursal/{id_suc}','sucursal@restaurarsucursal')->name('restaurarsucursal');
Route::POST('/editasucursal','sucursal@editasucursal')->name('editasucursal');
Route::get('/modificsucursal/{id_suc}','sucursal@modificsucursal')->name('modificsucursal');


Route::POST('/editarenta','renta@editarenta')->name('editarenta');
Route::get('/modificrenta/{id_ren}','renta@modificrenta')->name('modificrenta');
Route::get('/altarenta','renta@altarenta')->name('altarenta');
Route::POST('/guardarrenta','renta@guardarrenta')->name('guardarrenta');
Route::get('/reporterenta','renta@reporterenta')->name('reporterenta');
Route::get('/eliminarenta/{id_ren}','renta@eliminarenta')->name('eliminarenta');
Route::get('/restrenta/{id_ren}','renta@restrenta')->name('restrenta');


Route::get('/login','AccesoSistema@login')->name('login');
Route::POST('/valida','AccesoSistema@valida')->name('valida');
Route::get('/cerrarsesion','AccesoSistema@cerrarsesion')->name('cerrarsesion');