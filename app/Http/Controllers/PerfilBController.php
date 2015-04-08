<?php namespace App\Http\Controllers;
use Auth; 
use DB; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Request;


class PerfilBController extends Controller {

	public function ListarPersonas(){
		$Personas = \App\User::all();
		return view('listadoPersonas')->with("contacto",$Personas);
		 
	}
	 
	public function VerPerfil(){
		$value = Auth::user()->id;
		$user = DB::table('usuarios')->where('id',$value )->first();
		return view("Perfil")->with("perfil",$user);
	}
	public function EditarPerfil(){
		/**
		/Captura de datos nuevos que el usuario escribio
		**/
		$value = Auth::user()->id;
		$user = DB::table('usuarios')->where('id',$value )->first();
		$nombre = Request::input('p-nombre');
		$apellidos = Request::input('p-apellidos');
		$edad = Request::input('p-edad');
		$profesion = Request::input('p-profesion');
		$pais = Request::input('p-pais');
		/**
		/Mensajes al usuario
		**/
		$mensaje1='datos almacenados';
		$error='ocurrio un error vuelva a intentarlo';
		/**
		/validador
		**/
		$data = Request::all();
	//reglas de validacion
		$reglas=$array = array('p-nombre' => 'required', 
						   'p-apellidos'=>'required',
						   'p-edad'=>'required',
						   'p-profesion'=>'required',						   
						   'p-pais'=>'date|required'					 
						   );
	// Crear instancia del validador.
 	$validador = Validator::make($data, $reglas);
 	/**
 	/accion a realizar si el validador pasa
 	**/
 	//if($validador->passes()) {
 		
 	 	try{
		 $bd = DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update(array('nombre' => $nombre,
            'apellidos' => $apellidos,
            'edad' => $edad,
            'profesion' => $profesion,
          	'pais' => $pais));

			
		return Redirect::to('perfil')->with('message', 'datos guardados correctamente');
		}
		
		catch(ErrorException $e){
			return Redirect::to('perfil')->with('message', 'datos guardados correctamente');
		}
 	 //}

		return Redirect::to('perfil')->with('message', 'datos guardados correctamente');
	}

}
