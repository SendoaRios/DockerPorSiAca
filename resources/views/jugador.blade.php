@extends('layouts.app')

@section('title', 'Jugador')

@section('content')
@foreach ($Jugador as $obj)
    <div class="card text-center">
        <div class="card-header">
            {{$obj->dorsal}} | {{$obj->posicion}} | {{$obj->nombre}} {{$obj->apellido}}
        </div>
        <div class="card-body">
            <img class="card-img-top" style="width: 50%" src="../img/{{$obj->img}}" alt="{{$obj->nombre}}"><br>
            {{$obj->nombre_tecnica}} | {{$obj->tipo}}
            {{-- <p>{{$obj->nombre}} {{$obj->apellido}}</p> --}}
        </div>
        @if (auth()->check())
            <div class="card-footer text-muted">
                <a href="{{ route('EliminarJugador', ['id'=>$obj->id])}}" class="btn btn-danger">Eliminar</a>
                <a href="{{ route('EditarJugador', ['id'=>$obj->id])}}" class="btn btn-success">Editar</a>
            </div>
        @endif  
    </div>
@endforeach

@stop