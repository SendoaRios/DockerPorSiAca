@extends('layouts.app')

@section('title', 'Editar Jugador')

@section('content')



<div class="row">
    @if ( session('error') )
        <div class="alert alert-success">{{ session('error') }}</div>
    @endif
    <div class="span6">
        <form method="POST" action="{{ route('ModificarJugador') }}">
        {{-- <meta name="user_id" content="{{ $id }}"> --}}
        @csrf
    
            <h2>Editar Jugador</h2><br>
            @foreach ($Jugador as $obj)
            <input type="number" class="input-block-level" name="user_id" value="{{$obj->id}}" style="display: none">
            <input type="text" class="input-block-level" name="nombre" value="{{$obj->nombre}}">
            <input type="text" class="input-block-level" name="apellido" value="{{$obj->apellido}}">
            <input type="text" class="input-block-level" name="posicion" value="{{$obj->posicion}}">
            <input type="number" class="input-block-level" name="dorsal" value="{{$obj->dorsal}}">
            <select name="tecnica_id" class="input-block-level" required>
                <option disabled selected>Elige...</option>
                @foreach ($Tecnica as $obj)
                    <option value="{{$obj->id}}">{{$obj->nombre_tecnica}}</option>
                @endforeach
            </select>
            @endforeach
            <button class="btn btn-large btn-primary" type="submit">Editar</button>
        </form>
    </div>
</div>

@stop