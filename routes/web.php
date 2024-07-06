<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index']);
Route::get('/login',[HomeController::class,'login']);

//cambio contraseña
Route::get('/cambiarcontraseña',[HomeController::class,'index2']);

//gestionar usuarios
Route::get('/gestionarusuarios',[HomeController::class,'index3']);

//gestionar vehiculos
Route::get('/gestionarvehiculos',[HomeController::class,'index4']);


//gestionar clientes
Route::get('/gestionarclientes',[HomeController::class,'index5']);


//arriendos
Route::get('/arriendos',[HomeController::class,'index6']);

//arrendar
Route::get('/arrendar',[HomeController::class,'index7']);

//crear perfil
Route::get('/crearperfil',[HomeController::class,'index8']);
