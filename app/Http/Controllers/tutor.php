<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuto;
use App\concepto;
use App\usuario;
use App\cicloesc;
use Illuminate\Support\Facades\DB;
use Session;

class tutor extends Controller
{
	Public function index()
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
		 return view ('index');
	 }
	}

	Public function formulario1()
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

     	$resultado = tuto::orderby('idtt','desc')
                  ->take(1)
                  ->get();
         $idsig = $resultado[0]->idtt + 1;
         //echo $idsig;
         return view('formulario1')
         ->with('idsig',$idsig);
  }

	}
	Public function guardartutoria(Request $request){

    $nombre = $request->nombre;
	    $idtt = $request->idtt;

        /*$file = $request->file('archivo');
     if($file!="")
     {
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
	 	$img2="sinfoto.jpg";
	 }
	 */
	 $this->validate($request,[
		'nombre'=>['regex:/^[A-Z]*$/'],
		]);

        $tutorias = new tuto;
        $tutorias->idtt = $request->idtt;
        $tutorias->nombre = $request->nombre;
				$tutorias->activo = "si";
        $tutorias->save();

        $proceso = "ALTA DE TUTORIA";
        $mensaje = "Registro exitoso";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }





    Public function formulario2()
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
    	$resultado = concepto::orderby('idc','desc')
                 ->take(1)
                 ->get();
        $idsig = $resultado[0]->idc + 1;
        //echo $idsig;
        return view('formulario2')
        ->with('idsig',$idsig);
			}
	}

	Public function guardarconcepto(Request $request){

    $nombre = $request->nombre;
	    $idc = $request->idc;

        /*$file = $request->file('archivo');
     if($file!="")
     {
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
	 	$img2="sinfoto.jpg";
	 }
	 */
	 $this->validate($request,[
		'nombre'=>['regex:/^[A-Z]*$/'],
		]);

        $concepto = new concepto;
        $concepto->idc = $request->idc;
        $concepto->nombre = $request->nombre;
				$concepto->activo = "si";
        $concepto->save();

        $proceso = "ALTA DE CONCEPTO";
        $mensaje = "Registro exitoso";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }




    Public function formulario3()
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
    	$resultado = usuario::orderby('idu','desc')
                 ->take(1)
                 ->get();
        $idsig = $resultado[0]->idu + 1;
        //echo $idsig;
        return view('formulario3')
        ->with('idsig',$idsig);
			}
	}

	Public function guardarusuario(Request $request){

    $nombre = $request->nombre;
    $correo = $request->correo;
    $password = $request->password;
    $tipo = $request->tipo;
		$idu = $request->idu;

	 $this->validate($request,[
		'nombre'=>['regex:/^[A-Z,a-z]*$/'],
		'correo'=>'required|email',
		'password'=>'required',
		]);



        $usuario = new usuario;
        $usuario->idu = $request->idu;
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->tipo= $request->tipo;
				$usuario->activo = "si";
        $usuario->save();

        $proceso = "ALTA DE USUARIO";
        $mensaje = "Registro exitoso";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }


    public function editatutoria(Request $request)
    {
    $nombre=$request->nombre;
            $idtt=$request->idtt;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    ]);
        $tutorias= tutorias::find($idtt);
         $tutorias->idtt = $request->idtt;
        $tutorias->nombre = $request->nombre;
        $tutorias->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');
    }

    public function modificatutoria($idtt){
         $consulta = tuto::Where('idtt','=',$idtt)
                   ->get();

        return view('editatutoria')
        ->with('consulta',$consulta[0]);
    }

    public function guardartutorias(Request $request){
            $nombre=$request->nombre;
            $idtt=$request->idtt;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    ]);
        $tutorias= tuto::find($idtt);
        $tutorias->nombre = $request->nombre;
        $tutorias->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');

    }
        /////////////conceptos///////////////////

    public function editaconcepto(Request $request)
    {
    $nombre=$request->nombre;
            $idc=$request->idc;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    ]);
        $conceptos= conceptos::find($idc);
         $conceptos->idc = $request->idc;
        $conceptos->nombre = $request->nombre;
        $conceptos->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');
    }

    public function modificaconcepto($idc){
         $consulta = concepto::Where('idc','=',$idc)
                   ->get();

        return view('editaconceptos')
        ->with('consulta',$consulta[0]);
    }

    public function guardarconceptos(Request $request){
            $nombre=$request->nombre;
            $idc=$request->idc;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
    ]);
        $concepto= concepto::find($idc);
        $concepto->nombre = $request->nombre;
        $concepto->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');

    }

    ////////////////////usuarios////////////

    public function editausuario(Request $request)
    {
    $nombre=$request->nombre;
            $correo=$request->correo;
            $password=$request->password;
            $tipo=$request->tipo;
            $idc=$request->idc;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
        'correo'=>['regex:/^[A-Z,a-z,0-9]*[@]{1}[a-z]*[.]{1}[a-z]*$/'],
        'password'=>['regex:/^[A-Z,a-z,0-9]*$/'],
        'tipo'=>['regex:/^[A-Z,a-z]*$/'],

    ]);
        $usuario= usuario::find($idu);
        $usuario->idu = $request->idu;
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->tipo = $request->tipo;
        $usuario->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');
    }

    public function modificausuario($idu){
         $consulta = usuario::Where('idu','=',$idu)
                   ->get();

        return view('editausuarios')
        ->with('consulta',$consulta[0]);
    }

    public function guardarusuarios(Request $request){
            $nombre=$request->nombre;
            $correo=$request->correo;
            $password=$request->password;
            $tipo=$request->tipo;
            $idu=$request->idu;

    $this->validate($request,[
        'nombre'=>['regex:/^[a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'],
        'correo'=>['regex:/^[A-Z,a-z,0-9]*[@]{1}[a-z]*[.]{1}[a-z]*$/'],
        'password'=>['regex:/^[A-Z,a-z,0-9]*$/'],
        'tipo'=>['regex:/^[A-Z,a-z]*$/']
    ]);
        $usuario= usuario::find($idu);
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->tipo = $request->tipo;
        $usuario->save();

        echo '<script>alert("Modificacion Exitosa")</script> ';

        return view ('index');

    }

    //////ELIMINACIÓN///
     public function eliminat($idtt)
    {
      //maestros::find($idm)->delete();
      $tutorias= \DB::UPDATE("update tutorias
      set activo = 'no' where idtt= $idtt");
      $proceso = "Eliminar MAESTRO";
          $mensaje = "Registro eliminado Correctamente";
          echo '<script>alert("Eliminación Realizada")</script> ';
      return back();
    }

		public function eliminac($idc)
	 {
		 //maestros::find($idm)->delete();
		 $conceptos= \DB::UPDATE("update conceptos
		 set activo = 'no' where idc= $idc");
		 $proceso = "Eliminar MAESTRO";
				 $mensaje = "Registro eliminado Correctamente";
				 echo '<script>alert("Eliminación Realizada")</script> ';
		return back();
	 }

	 public function eliminau($idu)
	{
		//maestros::find($idm)->delete();
		$usuarios= \DB::UPDATE("update usuarios
		set activo = 'no' where idu= $idu");
		$proceso = "Eliminar MAESTRO";
				$mensaje = "Registro eliminado Correctamente";
				echo '<script>alert("Eliminación Realizada")</script> ';
		return back();
	}

	//////RESTAURACION///
	 public function restaurat($idtt)
	{
		//maestros::find($idm)->delete();
		$tutorias= \DB::UPDATE("update tutorias
		set activo = 'si' where idtt= $idtt");
		$proceso = "Eliminar MAESTRO";
				$mensaje = "Registro eliminado Correctamente";
				echo '<script>alert("Eliminación Realizada")</script> ';
		return back();
	}

	public function restaurac($idc)
 {
	 //maestros::find($idm)->delete();
	 $conceptos= \DB::UPDATE("update conceptos
	 set activo = 'si' where idc= $idc");
	 $proceso = "Eliminar MAESTRO";
			 $mensaje = "Registro eliminado Correctamente";
			 echo '<script>alert("Eliminación Realizada")</script> ';
	 return back();
 }

 public function restaurau($idu)
{
	//maestros::find($idm)->delete();
	$usuarios= \DB::UPDATE("update usuarios
	set activo = 'si' where idu= $idu");
	$proceso = "Eliminar MAESTRO";
			$mensaje = "Registro eliminado Correctamente";
			echo '<script>alert("Eliminación Realizada")</script> ';
	return back();
}

    //////CONSULTAS///////
	public function reportetutoria()
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
        $ciclos = ciclo::select('cicloesc')->get();
        //return $consulta;
        return view('reportetutoria')
        ->with('$ciclos',$ciclos);
			}
    }

    public function reporteconceptos()
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
        $consulta=concepto::select('*')->get();
        //return $consulta;
        return view('reporteconceptos')
        ->with('consulta',$consulta);
			}
    }

    public function reporteusuarios()
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
        $consulta=usuario::select('*')->get();
        //return $consulta;
        return view('reporteusuarios')
        ->with('consulta',$consulta);
      }
      
    }



}
