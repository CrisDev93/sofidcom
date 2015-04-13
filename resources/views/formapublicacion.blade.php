@extends('app')

@section('content')
<h1>Nueva Publicacion</h1>
<div class="nueva-publicacion">
	{!!Form::open(array('url' => 'publicacion'))!!}

<label>Titulo:</label> <br>
<input type="text" name="TituloPublicacion" value="">
</br>
<label>Contenido:</label> <br>
<textarea rows="4" cols="50" name="Publicacion">

</textarea>
</br>

<input type="submit" value="guardar">
{!! Form::close() !!}

</div>
</br>


@endsection
