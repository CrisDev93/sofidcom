@extends('app')

@section('content')
<h1>Publicaciones</h1>
<div class="nueva-publicacion">
	<a href="{{action('PublicacionBController@create')}} ">nueva publicacion</a> </br>

</div>
</br>
@foreach ($publicaciones as $publicaciones)
<a href="{{action('PublicacionBController@show',[$publicaciones->idPublicacion])}} ">{{$publicaciones->TituloPublicacion}}</a> </br>

 
@endforeach

@endsection
