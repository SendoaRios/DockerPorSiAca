<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tecnica;
use Illuminate\Support\Facades\DB;

class Jugador extends Model
{
    protected $table = 'jugadores';
    public $timestamps = false;

    public static function getJugadoresInf() {
        $jugador = Jugador::select('id', 'nombre', 'apellido', 'posicion', 'dorsal')
        ->get();
        return $jugador;
    }

    public static function getJugadorInf($id) {   
        /* $jugador = Jugador::select('id', 'nombre', 'apellido', 'posicion', 'dorsal')
        ->where('id', '=', $id)
        ->get();
        return $jugador; */

        $jugador = DB::table('jugadores')
            ->join('tecnicas', 'jugadores.tecnica_id', '=', 'tecnicas.id')
            ->select('jugadores.*', 'nombre_tecnica', 'tipo', 'img',)
            ->where('jugadores.id', '=', $id)
            ->get();
        return $jugador;
    }

    public static function eliminarJugadoresbyID($id) {
        Jugador::select('*')->where('id', '=', $id)->delete();
    }

    public static function modificarJugadorbyID($id) {
        Jugador::select('*')->where('id', '=', $id)->delete();
    }

}
