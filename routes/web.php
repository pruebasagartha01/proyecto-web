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


Route::get('/panelAdmin',[App\Http\Controllers\AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');