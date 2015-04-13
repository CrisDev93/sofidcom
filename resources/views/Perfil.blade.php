
@extends('app')

@section('content')
<h1>Perfil</h1>

{!!Form::open(array('action' => 'PerfilBController@EditarPerfil'))!!}

<label>nombre</label> 
<input type="text" name="p-nombre" value="{{$perfil->nombre}}">
</br>
<label>apellidos</label> 
<input type="text" name="p-apellidos"value="{{$perfil->apellidos}}" >
</br>
<label>edad</label> 
<input type="text"name="p-edad"value="{{$perfil->edad}}">
</br>
<label>profesion</label> 
<input type="text"name="p-profesion"value="{{$perfil->profesion}}">
</br>
<label>pais</label> 
<input type="text"name="p-pais"value="{{$perfil->pais}}">
</br>
<input type="submit" value="guardar">
{!! Form::close() !!}

@if(Session::has('message'))
    <div class="alert-box success">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif
@endsection
