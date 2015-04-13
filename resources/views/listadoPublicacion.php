@extends('app')

@section('content')
<h1>Publicaciones</h1>
<div class="nueva-publicacion">
	{!!Form::open(array('action' => 'PerfilBController@EditarPerfil'))!!}

<label>Titulo</label> 
<input type="text" name="p-Titulo" value="{{$perfil->nombre}}">
</br>
<label>Contenido</label> 
<input type="text" name="p-Contenido"value="{{$perfil->apellidos}}" >
</br>

<input type="submit" value="guardar">
{!! Form::close() !!}

</div>
</br>
@foreach ($contacto as $contacto)

 {{$contacto->nombre}} <input type="button" value="agregar" id="lp-agregar"> </br>

 
@endforeach
@endsection
