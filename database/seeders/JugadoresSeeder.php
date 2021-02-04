<?php

namespace Database\Seeders;
use App\Models\Jugador;

use Illuminate\Database\Seeder;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Mark Evans
            $jugador = new Jugador();

            $jugador->id=1;
            $jugador->nombre='Mark';
            $jugador->apellido='Evans';
            $jugador->posicion='Portero';
            $jugador->dorsal=1;
            $jugador->tecnica_id=1;
    
            $jugador->save();

            // Axel Blaze
            $jugador = new Jugador();

            $jugador->id=2;
            $jugador->nombre='Axel';
            $jugador->apellido='Blaze';
            $jugador->posicion='Delantero';
            $jugador->dorsal=10;
            $jugador->tecnica_id=2;
    
            $jugador->save();

            // Kevin Dragonfly
            $jugador = new Jugador();

            $jugador->id=3;
            $jugador->nombre='Kevin';
            $jugador->apellido='Dragonfly';
            $jugador->posicion='Delantero';
            $jugador->dorsal=9;
            $jugador->tecnica_id=3;
    
            $jugador->save();

            // Jack Wallside
            $jugador = new Jugador();

            $jugador->id=4;
            $jugador->nombre='Jack';
            $jugador->apellido='Wallside';
            $jugador->posicion='Defensa';
            $jugador->dorsal=3;
            $jugador->tecnica_id=4;
    
            $jugador->save();

            // Nathan Swift
            $jugador = new Jugador();

            $jugador->id=5;
            $jugador->nombre='Nathan';
            $jugador->apellido='Swift';
            $jugador->posicion='Defensa';
            $jugador->dorsal=2;
            $jugador->tecnica_id=5;
    
            $jugador->save();
    
        }
    }
