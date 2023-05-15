<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/nuevochat', [App\Http\Controllers\HomeController::class, 'index1'])->name('nuevochat');

Auth::routes();

Route::get('/modificarchat', [App\Http\Controllers\HomeController::class, 'index2'])->name('modificarchat');

Route::get('/miPerfil', [App\Http\Controllers\HomeController::class, 'index3'])->name('miPerfil');

Route::get('/pagoExitoso', [App\Http\Controllers\HomeController::class, 'index4'])->name('pagoExitoso');

Route::get('/pagoFallido', [App\Http\Controllers\HomeController::class, 'index5'])->name('pagoFallido');

Route::get('/subscripcion', [App\Http\Controllers\HomeController::class, 'index6'])->name('subscripcion');

Route::get('/panelAdmin',[App\Http\Controllers\AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/editarUsuario',[App\Http\Controllers\AdminController::class,'index1'])
->middleware('auth.admin')
->name('admin.editarUsuario');

Route::get('/editarChatBot',[App\Http\Controllers\AdminController::class,'index2'])
->middleware('auth.admin')
->name('admin.editarChatBot');