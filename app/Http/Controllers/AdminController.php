<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('panelAdmin');
    }
    public function index1()
    {
        $datos =  User::all();
        return view('editarUsuario', compact('datos'));
    }
    public function index2()
    {
        return view('editarChatBot');
    }
}
