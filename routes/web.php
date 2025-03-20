<?php

use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Inicio*/
Route::get('/',[PostsController::class,'index'])->name('Inicio');

/*Borrar*/
Route::get('/borrarpost/{id}',[PostsController::class,'destroy'])->name('borrarPost');

/*Crear posts*/
Route::post('/crearpost',[PostsController::class,'create'])->name('CrearPost');

/*Vista de Crear posts*/
Route::get('/crearpostvista',[PostsController::class,'VistaCrearPost'])->name('CrearPostVista');

/*Metodo show o ver más*/
Route::get('/mostrarpost/{id}',[PostsController::class,'show'])->name('Vistashow');

/*Vista de actualizar*/
Route::get('/actualizarpost/{id}',[PostsController::class,'VistaActualizar'])->name('VistaActualizar');

/*Actualizar*/
Route::post('/actualizar/{id}',[PostsController::class,'update'])->name('Actualizar');

/*Filtrar*/
Route::get('/filtrar',[PostsController::class,'filter'])->name('Filtrar');