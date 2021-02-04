<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tecnica;
use App\Models\Jugador;

class ViewsController extends Controller
{
    public function viewAñadirJugadores(){
        $Tecnica = Tecnica::getTecnicasInf();

        return view('añadir')->with('Tecnica', $Tecnica);
    }

    public function viewJugadores(){
        $Jugador = Jugador::getJugadoresInf();

        return view('jugadores')->with('Jugador', $Jugador);
    }

    public function viewJugadoresInf($id){       
        $Jugador = Jugador::getJugadorInf($id);

        return view('jugador')->with('Jugador', $Jugador);
    }

    public function viewEditarJugador($id){
        $Tecnica = Tecnica::getTecnicasInf();       
        $Jugador = Jugador::getJugadorInf($id);

        return view('editar')->with('Jugador', $Jugador)->with('Tecnica', $Tecnica);
    }
}
