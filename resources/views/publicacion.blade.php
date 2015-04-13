@extends('app')

@section('content')
<h1>{{$publicacion[0]->TituloPublicacion}}</h1>
	<h2>{{$publicacion[0]->Publicacion}}</h2>
	<h3>{{"posteado por: "}}{{$publicacion[0]->nombre}}</h2>

</br>
@foreach ($comentarios as $comentarios)
<p>{{$comentarios->nombre}} respondio:</p>

{{$comentarios->Contenido}} 
@endforeach

<div class="nuevo-comentario">
	{!!Form::open(array('url' => 'comentario'))!!}


<label>Responder:</label> <br>
<textarea rows="4" cols="50" name="Contenido">

</textarea>
<input type="hidden" name="idPublicacion" value="{{$publicacion[0]->idPublicacion}}">
</br>

<input type="submit" value="guardar">
{!! Form::close() !!}

</div>
<a href="{{action('PublicacionBController@index')}} ">regresar</a> 

@endsection
