<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\FotografiaController;

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
})->name('welcome');
Route::get('galeria', [FotografiaController::class, 'index'])->name('galeria.get');
Route::post('galeria/subir', [FotografiaController::class, 'store'])->name('galeria.post')->middleware('auth.basic');
//Route::get('login', [FotografiaController::class, 'index'])->middleware('auth.basic');
Route::get('events', function () {
    return view('events');
})->name('events');
