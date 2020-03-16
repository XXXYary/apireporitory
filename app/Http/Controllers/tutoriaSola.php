<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clasificado;
use App\cicloesc;
use App\tutorias;
use App\usuario;
use App\alumnos;
use App\caso;
use App\alumnosgrupos;
use Session;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;

class tutoriaSola extends Controller
{
    public function altaTutoriaAlone($id, $ciclo)
    {
      //return $request;
      //return $id;
      $ciclo = cicloesc::findOrFail($ciclo);
      $sname = Session::get('sesionname');
      $datos = alumnos::where('matricula',$id)
      ->select('matricula','nAlumno as nombre','apAlumno as apellidop','amAlumno as apellidom')
      ->get();
      //return $ciclo;
      $casos = caso::all();
      $clasificacion = clasificado::all();
      return view('tutoriaindi')
      ->with('clasificacion',$clasificacion)
      ->with('ciclo',$ciclo)
      ->with('casos',$casos)
      ->with('datos',$datos);

    }
    public function hacerpdf(Request $request)
    {
    	$users = usuario::get();
    	$pdf = PDF::loadview(´pdf.users, compact('users'));
    	//return view('tutoriaSolaPDF');
    }

    public function tutoriasaltas(Request $request)
    {
      $sidu = Session::get('sesionidu');

      //return $request;

      $tutoria = new tutorias;
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
      $tutoria->caso = $request->casos;
      $tutoria->canalizacion = $request->canalizacion;
      $tutoria->seguimiento = $request->seguimiento;
      $tutoria->periodo = $request->periodo;
      $tutoria->tipo2 = $request->tipo2;
      $tutoria->save();

      echo '<script>alert("La tutoria se registro con exito")</script> ';

      return redirect('/reportestuto');
    }

    public function exportPDF($id)
    {
      $sidu = Session::get('sesionidu');
      $tuto = tutorias::find($id);
      //return $tuto;

      $tutorias = tutorias::join('alumnos','alumnos.matricula','tutorias.matricula')
      ->join('usuarios','usuarios.iduser','tutorias.tutor')
      ->join('alumnosgrupos','alumnosgrupos.matricula','alumnos.matricula')
      ->join('grupos','grupos.idgrupo','alumnosgrupos.idgrupo')
      ->where('alumnos.matricula',$tuto->matricula)
      ->where('tutorias.idt',$id)
      ->where('grupos.idcesc',$tuto->ciclo)
      ->select(
              'tutorias.*',
              'usuarios.nusuario as usuarion',
              'usuarios.apusuario as usuarioap',
              'usuarios.amusuario as usuarioam',
              'grupos.ngrupo as grupo',
              'alumnos.nAlumno as nombre',
              'alumnos.apAlumno as apellido_paterno',
              'alumnos.amAlumno as apellido_materno'
              )
      ->get();
       // return $tutorias;
        $pdf = PDF::loadview('tutorias.pdf', compact('tuto','tutorias'));
        return $pdf->stream('tutorias.pdf'); 
        //return view('tutorias.pdf')->with('request',$request)->with('tutorias',$tutorias);
    }
}
