<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tutorias;
use App\clasificado;
use App\tuto;
use App\concepto;
use App\usuario;
use App\cicloesc;
use App\grupos;
use App\alumnosgrupos;
use App\alumnos;
use App\caso;
use Illuminate\Support\Facades\DB;
use Session;

class TutoriasController extends Controller
{

	public function cicloescolar()
    {
			$sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
	   if($sname =='' or $sidu =='' or $stipo=='')
	   {
		   Session::flash('error', 'Es necesario loguearse antes de continuar');
		 	return redirect()->route('login');

	   }
	   else
	   {
        $ciclos = cicloesc::join('grupos','grupos.idcesc','cicloescs.idcesc')
				->where('grupos.iduser',$sidu)
				->select('cicloescs.idcesc as id','cicloescs.cicloesc as ciclo')
				->get();
        //return $ciclos;
        return view('cicloescolar')
        ->with('ciclos',$ciclos);
			}
    }

		public function grupos(Request $request)
	    {
				//return $request;
				$sname = Session::get('sesionname');
			  $sidu = Session::get('sesionidu');
			  $stipo = Session::get('sesiontipo');
		   if($sname =='' or $sidu =='' or $stipo=='')
		   {
			   Session::flash('error', 'Es necesario loguearse antes de continuar');
			 	return redirect()->route('login');

		   }
		   else
		   {
	        $asignados = grupos::where('idcesc',$request->ngrupo)
					->where('iduser',$sidu)
					->select('idgrupo as id','ngrupo as nombre')
					->get();
	        //return $grupos;
	        return view('grupos')
	        ->with('asignados',$asignados);
				}
	    }

			public function listas($id)
		    {
					//return $id;
					$sname = Session::get('sesionname');
				  $sidu = Session::get('sesionidu');
				  $stipo = Session::get('sesiontipo');
			   if($sname =='' or $sidu =='' or $stipo=='')
			   {
				   Session::flash('error', 'Es necesario loguearse antes de continuar');
				 	return redirect()->route('login');

			   }
			   else
			   {
					 $ciclo = grupos::join('cicloescs','cicloescs.idcesc','grupos.idcesc')
					 ->where('idgrupo',$id)
					 ->select('grupos.ngrupo as nombre','cicloescs.cicloesc','cicloescs.idcesc')
					 ->get();
					 $idciclo = $id;
		        $asignados = alumnosgrupos::join('grupos','grupos.idgrupo','alumnosgrupos.idgrupo')
						->join('alumnos','alumnos.matricula','alumnosgrupos.matricula')
						->where('alumnosgrupos.idgrupo',$id)
						->select('alumnos.matricula as matricula','alumnos.nAlumno as nombre','alumnos.apAlumno as apellido_paterno','alumnos.amAlumno as apellido_materno')
						->orderBy('apellido_paterno','DESC')
						->groupBy('matricula','nombre','apellido_paterno','apellido_materno')
						->get();
		        //return $asignados;
		        return view('listas')
						->with('ciclo',$ciclo)
		        ->with('asignados',$asignados)
						->with('idciclo',$idciclo);
					}
			}
			
	public function reportes()
	{
		$sidu = Session::get('sesionidu');
		//return $sidu;
		//fecha alumno motivo detalles (editar, pdf)
		$reportes = tutorias::join('usuarios','usuarios.iduser','tutorias.tutor')
		->join('cicloescs','cicloescs.idcesc','tutorias.ciclo')
		->join('alumnos','alumnos.matricula','tutorias.matricula')
		->where('tutorias.tutor',$sidu)
		->select(
			'tutorias.idt as id',
			'tutorias.fecha as fecha',
			'alumnos.nAlumno as nombre',
			'alumnos.apAlumno as apellido_paterno',
			'alumnos.amAlumno as apellido_materno',
			'tutorias.descripcion as motivo',
			'tutorias.estatus as status'
			)
		->orderBy('tutorias.created_at','DESC')
		->get();
		//return $reportes;
		return view('tutorias.index', compact('reportes','sidu'));
	}

	public function edit($id)
	{
		/*
		$tutoria = tutorias::join('alumnos','alumnos.matricula','tutorias.matricula')
		->where('tutorias.idt',$id)
		->select('tutorias.*','alumnos.nAlumno as nombre','alumnos.apAlumno as apellido_p','alumnos.amAlumno as apellido_m')
		->get();
		$clasificacion = clasificado::all();
		//return $tutoria;
		
		$ciclo = cicloesc::findOrFail($ciclo);*/
		$sname = Session::get('sesionname');
		//$datos = tutorias::where('tutorias',$id)
		//->select('matricula','nAlumno as nombre','apAlumno as apellidop','amAlumno as apellidom')
		$tutoria = tutorias::join('alumnos','alumnos.matricula','tutorias.matricula')
		->where('tutorias.idt',$id)
		->select('tutorias.*','alumnos.nAlumno as nombre','alumnos.apAlumno as apellido_p','alumnos.amAlumno as apellido_m')
		->get();
		//return $ciclo;
		$casos = caso::all();
		$clasificacion = clasificado::all();
		return view('tutorias.edit', compact('tutoria','clasificacion'))
		->with('clasificacion',$clasificacion)
      	//->with('ciclo',$ciclo)
      	->with('casos',$casos)
      	->with('datos',$tutoria);
	}

	public function update(Request $request, $id)
    {
		$sidu = Session::get('sesionidu');
	$tutoria = tutorias::findOrFail($id);
	//return $request;
      $tutoria->fecha = $request->fecha;
      $tutoria->tipo = $request->tipo;
      $tutoria->descripcion = $request->descripcion;
      $tutoria->acciones = $request->acciones;
      $tutoria->sexo = $request->sexo;
      $tutoria->fechasig = $request->siguiente;
      $tutoria->estatus = $request->estatus;
      $tutoria->profesor =  $request->profesor;
      $tutoria->evidencia = $request->evidencia;
      $tutoria->detalle = $request->detalles;
      $tutoria->matricula = $request->matricula;
      $tutoria->tutor = $sidu;
      $tutoria->ciclo = $request->cesc;
      $tutoria->save();

        //return $request->all();
        return redirect('/reportestuto');
    }

    Public function caso()
    {
    	$sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
	   if($sname =='' or $sidu =='' or $stipo=='')
	   {
		   Session::flash('error', 'Es necesario loguearse antes de continuar');
		 	return redirect()->route('login');

	   }
	   else
	   {
    	$resultado = caso::orderby('idc','desc')
                 ->take(1)
                 ->get();
        $idsig = $resultado[0]->idc + 1;
        //echo $idsig;
        return view('caso')
        ->with('idsig',$idsig);
			}
    }

    

    public function guardarcaso(Request $request){
    
    $tcaso = $request->tcaso;
	    $idc = $request->idc;

	 $this->validate($request,[
		'nombre'=>['regex:/^[A-Z]*$/'],
		]);

        $caso = new caso;
        $caso->idc = $request->idc;
        $caso->tcaso = $request->tcaso;
				$caso->activo = "si";
        $caso->save();

        echo '<script>alert("Alta Exitosa")</script> ';

        return redirect('/index');
    }

    public function index()
    {
    	$Casos = caso::all();
        return view('casos', compact('Casos'));
	}
	
	public function infoalumno($id)
	{
		$alumno = alumnos::findOrFail($id);
		return view('tutorias.info', compact('alumno'));
	}

	public function reporteindividual($id)
	{
		$alumno = alumnos::findOrFail($id);
		$info = tutorias::join('usuarios','usuarios.iduser','tutorias.tutor')
		->join('cicloescs','cicloescs.idcesc','tutorias.ciclo')
			->where('tutorias.matricula',$id)
			->select('tutorias.idt as id',
					'tutorias.fecha as fecha',
					'usuarios.nusuario as nombre',
					'usuarios.apusuario as apellido_paterno',
					'usuarios.amusuario as apellido_materno',
					'tutorias.descripcion as motivo',
					'tutorias.estatus as status',
					'cicloescs.cicloesc as cuatrimestre')
			->orderBy('tutorias.idt','DESC')
			->get();
		return view('tutorias.reporteindividual', compact('alumno','info'));
	}

}
