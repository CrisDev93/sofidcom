@extends('app')

@section('content')
<h1>personas</h1>
<label>
	filtrar busqueda 
	<input type="text">
</label>
</br>
@foreach ($contacto as $contacto)
 {{$contacto->nombre}} </br>
@endforeach
@endsection
