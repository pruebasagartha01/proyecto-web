<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index()
    {
        $datos = user()::all();
        return view('editarUsuario');
    }
}
