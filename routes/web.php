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
    return redirect('/login');
});

Route::get('/index','tutor@index')->name('index');

Route::get('/login','AccesoSistema@login')->name('login');
Route::POST('/valida','AccesoSistema@valida')->name('valida');
Route::get('/cerrarsesion','AccesoSistema@cerrarsesion')->name('cerrarsesion');

Route::get('/vista_ajax','ajax@vista_ajax')->name('vista_ajax');
Route::POST('/guardar','ajax@guardar')->name('guardar');

Route::get('/vista_ajax2','ajax2@vista_ajax2')->name('vista_ajax2');
Route::get('/getmsg/{id}','ajax2@obtener')->name('getmsg');


Route::get('/altamaestro','MaestroController@altamaestro')->name('altamaestro');
Route::POST('/guardarmaestro','MaestroController@guardarmaestro')->name('guardarmaestro');
Route::get('/reportemaestros','MaestroController@reportemaestros')->name('reportemaestros');
Route::get('/modificam/{idm}','MaestroController@modificam')->name('modificam');
Route::POST('/editamaestro','MaestroController@editamaestro')->name('editamaestro');
Route::get('/eliminam/{idm}','MaestroController@eliminam')->name('eliminam');

Route::get('/formulario1','tutor@formulario1')->name('formulario1');
Route::POST('/guardartutoria','tutor@guardartutoria')->name('guardartutoria');
Route::get('/formulario2','tutor@formulario2')->name('formulario2');
Route::POST('/guardarconcepto','tutor@guardarconcepto')->name('guardarconcepto');
Route::get('/formulario3','tutor@formulario3')->name('formulario3');
Route::POST('/guardarusuario','tutor@guardarusuario')->name('guardarusuario');

Route::get('/reportetutoria','tutor@reportetutoria')->name('reportetutoria');
Route::get('/reporteconceptos','tutor@reporteconceptos')->name('reporteconceptos');
Route::get('/reporteusuarios','tutor@reporteusuarios')->name('reporteusuarios');


Route::get('/modificatutoria/{idtt}','tutor@modificatutoria')->name('modificatutoria');
Route::POST('/guardartutorias','tutor@guardartutorias')->name('guardartutorias');
Route::get('/editatutoria','tutor@editatutoria')->name('editatutoria');
Route::get('/eliminatutoria/{idtt}','tutor@eliminatutoria')->name('eliminatutoria');
Route::get('/eliminat/{idtt}','tutor@eliminat')->name('eliminat');
Route::get('/restaurat/{idtt}','tutor@restaurat')->name('restaurat');


Route::get('/modificaconcepto/{idc}','tutor@modificaconcepto')->name('modificaconcepto');
Route::POST('/guardarconceptos','tutor@guardarconceptos')->name('guardarconceptos');
Route::get('/editaconcepto','tutor@editaconcepto')->name('editaconcepto');
Route::get('/eliminac/{idc}','tutor@eliminac')->name('eliminac');
Route::get('/restaurac/{idc}','tutor@restaurac')->name('restaurac');

Route::get('/modificausuario/{idu}','tutor@modificausuario')->name('modificausuario');
Route::POST('/guardarusuarios','tutor@guardarusuarios')->name('guardarusuarios');
Route::get('/editausuario','tutor@editausuario')->name('editausuario');
Route::get('/eliminau/{idu}','tutor@eliminau')->name('eliminau');
Route::get('/restaurau/{idu}','tutor@restaurau')->name('restaurau');

Route::get('/cicloescolar','TutoriasController@cicloescolar')->name('cicloescolar');
Route::post('/grupos','TutoriasController@grupos')->name('grupos');
Route::get('/lista-grupo/{id}', 'TutoriasController@listas');

Route::get('/reportestuto','TutoriasController@reportes')->name('reportes');

Route::get('/tutoriaindi/{id}/{ciclo}','tutoriaSola@altaTutoriaAlone');
Route::get('/infoalumno/{id}','TutoriasController@infoalumno');
Route::get('/reporteindividual/{id}','TutoriasController@reporteindividual');
Route::get('/tutorias/{id}/edit','TutoriasController@edit')->name('tutorias');
Route::get('/exportpdf/{id}','tutoriaSola@exportPDF')->name('exportPDF');
Route::get('/tutoriasaltas','tutoriaSola@tutoriasaltas')->name('tutoriasaltas');
Route::get('/tutoriaupdate/{id}','TutoriasController@update')->name('tutoriaupdate');

//combo box
Route::get('/form', ['as' => 'form', 'uses' => 'clasificacioncontroller@index']);

//Combo de cadi
Route::get('/caso','TutoriasController@caso')->name('caso');
Route::POST('/guardarcaso','TutoriasController@guardarcaso')->name('guardarcaso');

Route::get('/casos', ['as' => 'casos', 'uses' => 'TutoriasController@index']);