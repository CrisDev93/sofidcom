<?php namespace App\Http\Controllers;
use Auth; 
use DB; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\publicaciones;
use App\comentario;
use Request;

class PublicacionBController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		///$publicaciones = DB::table('publicacion')->get();
		$publicaciones =publicaciones::latest()->get();
		return view('listadoPublicacion')->with("publicaciones",$publicaciones);
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('formapublicacion')->with("contacto","something");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input = Request::all();
		$input['idUsuario']= Auth::user()->id;
		publicaciones::create($input);
		return Redirect('publicaciones');
	}
	public function storeC()
	{
		//
		$input = Request::all();
		$input['idUsuario']= Auth::user()->id;
		comentario::create($input);
		//return $input['idPublicacion'];
		return Redirect('publicaciones/'.$input['idPublicacion']);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$publicacion = DB::table('publicacion')->where('idPublicacion',$id )
		->join('usuarios','publicacion.idUsuario','=','usuarios.id')
		->select('publicacion.idPublicacion','publicacion.TituloPublicacion','publicacion.Publicacion','usuarios.nombre')->get();

		$comentarios = DB::table('comentario')
		->where('idPublicacion',$id )
		->join('usuarios','comentario.idUsuario','=','usuarios.id')
		->select('comentario.Contenido','usuarios.nombre')
		->get();
		//return $publicacion;
		return view('publicacion')->with("publicacion",$publicacion)->with("comentarios",$comentarios);
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
