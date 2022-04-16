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
    return view('auth.login');
});

Route::resource('home', 'App\Http\Controllers\HomeController');

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

Route::resource('clientes', 'App\Http\Controllers\ClientesController');

Route::resource('cajas_diarias', 'App\Http\Controllers\CajaDiariaController');

Route::resource('ventas', 'App\Http\Controllers\VentasController');

Route::resource('stock', 'App\Http\Controllers\StockController');

Route::resource('cantidad', 'App\Http\Controllers\CantidadController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
