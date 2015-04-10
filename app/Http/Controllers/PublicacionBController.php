<?php namespace App\Http\Controllers;
use Auth; 
use DB; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\publicaciones;
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$publicacion = DB::table('publicacion')->where('idPublicacion',$id )->first();

		$comentarios = DB::table('comentario')->where('idPublicacion',$id )->get();
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
