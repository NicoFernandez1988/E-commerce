<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdministradorController;
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

/*
Route::get('/', function () {
    return view('auth.login');
});
*/

Route::get('/welcome', function () {
    return view('layouts.template');
});

Route::get('/logueo', function () {
    return view('cliente.logueo');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/registro', function () {
    return view('cliente.registro');
});

Route::get('/index2', function () {
    return view('cliente.index2');
});

Route::get('/create', function () {
    return view('cliente.create');
});
/*
Route::get('/cliente', function () {
    return view('cliente.index');
});
Route::get('/cliente/create',[ClienteController::class,'create']);
*/

Route::resource('cliente',ClienteController::class)->middleware('auth');
Route::resource('administrador',AdministradorController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', [AdministradorController::class, 'index'])->name('home');
Route::get('/index2', [AdministradorController::class, 'index2'])->name('home');
Route::get('/home2', [ClienteController::class, 'index2'])->name('home');

//Funcion para que al loguearse me direccione al index del administrador.
Route::group(['middleware' => 'auth'], function (){

Route::get('/', [AdministradorController::class, 'index'])->name('home');

});
//Funcion para que al loguearse me direccione a la tienda.
Route::group(['middleware' => 'auth'], function (){

    Route::get('/home2', [ClienteController::class, 'index2'])->name('home');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


