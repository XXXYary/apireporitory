<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Session;
class AccesoSistema extends Controller
{
    public function login()
  {
	  return view('login');
  }
    public function valida(Request $request)
  {
	  $correo = $request->correo;
	  $contrasena = $request->password;

 	  $this->validate($request,[
	     'correo'=>'required|email',
		 'password'=>'required',
		  ]);
      $usuarios =usuario::where('correo','=',$correo)
	                       ->where('login','=',$contrasena)
						   ->where('activo','=',1)
						   ->get();
	  if (count($usuarios)==0 )
	  {
         Session::flash('error', 'El usuario no existe o la contraseña
                          		 no es correcta');
		 return redirect('login');
	  }
	  else
	  {
		  Session::put('sesionname',$usuarios[0]->nusuario);
		  Session::put('sesionidu',$usuarios[0]->iduser);
		  Session::put('sesiontipo',$usuarios[0]->perfil);
          return redirect('index');
	  }

  }
  public function cerrarsesion()
  {
	   Session::forget('sesionname');
	   Session::forget('sesionidu');
	   Session::forget('sesiontipo');
	   Session::flush();
	   Session::flash('error', 'Session Cerrada Correctamente');
	   return redirect()->route('login');
  }
}
