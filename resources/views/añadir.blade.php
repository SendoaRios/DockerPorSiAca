@extends('layouts.app')

@section('title', 'Añadir Jugador')

@section('content')
<div class="row">
    @if ( session('error') )
        <div class="alert alert-success">{{ session('error') }}</div>
    @endif
    <div class="span6">
        
        <form method="POST" action="{{ route('AñadirJugador') }}">
        @csrf
            <h2>Añadir Jugador</h2><br>
            <input type="text" class="input-block-level" name="nombre" placeholder="Nombre">
            <input type="text" class="input-block-level" name="apellido" placeholder="Apellido">
            <input type="text" class="input-block-level" name="posicion" placeholder="Posicion">
            <input type="number" class="input-block-level" name="dorsal" placeholder="Dorsal">
            <select name="tecnica_id" class="input-block-level" required>
                <option disabled selected>Elige...</option>
                @foreach ($Tecnica as $obj)
                    <option value="{{$obj->id}}">{{$obj->nombre_tecnica}}</option>
                @endforeach
            </select>
            <button class="btn btn-large btn-primary" type="submit">Añadir</button>
        </form>

    </div>
        
    <div class="span6">

        <form  method="POST" action="{{ route('AñadirTecnica') }}">
        @csrf
            <h2>Añadir Super tecnica</h2><br>
            <input type="text" class="input-block-level" name="nombre" placeholder="Nombre">
            <input type="text" class="input-block-level" name="tipo" placeholder="Tipo">
            <input type="text" class="input-block-level" name="img" placeholder="Imagen">
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>
        
    </div>

</div>

@stop