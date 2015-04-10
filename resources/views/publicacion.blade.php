@extends('app')

@section('content')
<h1>{{$publicacion->TituloPublicacion}}</h1>
	<h2>{{$publicacion->Publicacion}}</h2>
</br>
@foreach ($comentarios as $comentarios)
{{$comentarios->Contenido}}
{{$comentarios->idUsuario}}

@endforeach

@endsection
