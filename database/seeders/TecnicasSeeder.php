<?php

namespace Database\Seeders;
use App\Models\Tecnica;

use Illuminate\Database\Seeder;

class TecnicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mano Celestial
        $tecnica = new Tecnica();

        $tecnica->id=1;
        $tecnica->nombre_tecnica='Mano Celestial';
        $tecnica->tipo='Atajo';
        $tecnica->img='Celestial.jpg';

        $tecnica->save();

        // Tornado de Fuego
        $tecnica = new Tecnica();

        $tecnica->id=2;
        $tecnica->nombre_tecnica='Tornado de Fuego';
        $tecnica->tipo='Tiro';
        $tecnica->img='Tornado.jpg';

        $tecnica->save();

        // Remate Dragon
        $tecnica = new Tecnica();

        $tecnica->id=3;
        $tecnica->nombre_tecnica='Remate Dragon';
        $tecnica->tipo='Tiro';
        $tecnica->img='Dragon.jpg';

        $tecnica->save();

        // El Muro
        $tecnica = new Tecnica();

        $tecnica->id=4;
        $tecnica->nombre_tecnica='El Muro';
        $tecnica->tipo='Bloqueo';
        $tecnica->img='Muro.jpg';

        $tecnica->save();

        // Entrada Huracan
        $tecnica = new Tecnica();

        $tecnica->id=5;
        $tecnica->nombre_tecnica='Entrada Huracan';
        $tecnica->tipo='Regate';
        $tecnica->img='Huracan.jpg';

        $tecnica->save();

    }
}
