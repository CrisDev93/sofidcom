@extends('app')

@section('content')
<h1>personas</h1>
<label>
	filtrar busqueda 
	<input type="text">
</label>
</br>
@foreach ($contacto as $contacto)

 {{$contacto->nombre}} <input type="button" value="agregar" id="lp-agregar"> </br>

 
@endforeach
@endsection
