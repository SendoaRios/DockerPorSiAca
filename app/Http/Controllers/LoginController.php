<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Log;
use App\User;

class LoginController extends Controller
{
    public function cerrarSesion(){

        Auth::logout();

        return redirect()->back();
        
    }
}