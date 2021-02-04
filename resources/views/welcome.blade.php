@extends('layouts.app')

@section('title', 'Inazuma Eleven')

@section('content')

    <div class="container pt-5">
        <div class="row">
            <a href="{{ url('/Jugadores') }}" class="btn btn-primary">JUGADORES</a>
        </div>
        @if (auth()->check())
        <div class="row pt-5">
            <a href="{{ url('/Añadir') }}" class="btn btn-warning">AÑADIR</a>
        </div>
        <div class="row pt-5">
            <a href="{{ url('/Editar') }}" class="btn btn-primary">EDITAR</a>
        </div>
        @endif
    </div>
@stop