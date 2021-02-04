@extends('layouts.app')

@section('title', 'Jugadores')

@section('content')

@foreach ($Jugador as $obj)
    <div class="card text-center">
        <div class="card-header">
            {{$obj->dorsal}} | {{$obj->nombre}} {{$obj->apellido}}
        </div>
        <div class="card-body">
            <a href="{{ route('VerJugador', ['id'=>$obj->id])}}" class="btn btn-primary">Informacion</a>
        </div>
    </div>
@endforeach

@stop