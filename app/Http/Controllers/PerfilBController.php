<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PerfilBController extends Controller {

	public function ListarPersonas(){
		$Personas = \App\User::all();
		return view('listadoPersonas')->with("contacto",$Personas);
		 
	}

}
