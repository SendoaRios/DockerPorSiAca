<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jugador;

class Tecnica extends Model
{
    protected $table = 'tecnicas';
    public $timestamps = false;

    public static function getTecnicasInf() {
        $tecnica = Tecnica::select('id', 'nombre_tecnica', 'tipo', 'img')
        ->get();
        return $tecnica;
    }

}
