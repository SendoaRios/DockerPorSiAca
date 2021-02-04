<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Tecnica;
use Log;

class BDController extends Controller
{
    public function añadirJugador(Request $request){
        $data = $request->input();

        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $posicion = $data['posicion'];
        $dorsal = $data['dorsal'];
        $tecnica_id = $data['tecnica_id'];

        $jugador = new Jugador;

        $jugador->nombre = $nombre;
        $jugador->apellido = $apellido;
        $jugador->posicion = $posicion;
        $jugador->dorsal = $dorsal;
        $jugador->tecnica_id = $tecnica_id;

        $jugador->save();

        return redirect()->route('VistaJugadores');
    }

    public function añadirTecnica(Request $request){
        $data = $request->input();

        $nombre = $data['nombre'];
        $tipo = $data['tipo'];
        $img = $data['img'];

        $tecnica = new Tecnica;

        $tecnica->nombre_tecnica = $nombre;
        $tecnica->tipo = $tipo;
        $tecnica->img = $img;

        $tecnica->save();

        return redirect()->route('VistaJugadores');
    }

    public function eliminarJugador($id){
        $Jugador = Jugador::eliminarJugadoresbyID($id);

        return redirect()->route('VistaJugadores');
    }

    public function modificarJugador(Request $request){

        $data = $request->input();

        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $posicion = $data['posicion'];
        $dorsal = $data['dorsal'];
        $tecnica_id = $data['tecnica_id'];
        $id = $data['user_id'];

        $Jugador = Jugador::find($id);

        $Jugador->nombre = $nombre;
        $Jugador->apellido = $apellido;
        $Jugador->posicion = $posicion;
        $Jugador->dorsal = $dorsal;
        $Jugador->tecnica_id =$tecnica_id;
        

        $Jugador->save();

        /* var_dump($Jugador); */

        return redirect()->route('VistaJugadores');
    }
}