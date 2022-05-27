<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CartaController as APICartaController;

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
    return "capturas astrales";
});

Route::get('/capturas', 
[APICartaController::class, 'index']) ->
                name('api.capturas.index');
Route::get('/capturas/create', 
[APICartaController::class, 'create'])->
                name('api.capturas.create');
Route::post('/capturas/store',
[APICartaController::class, 'store'])->
                name('api.capturas.store');
Route::delete('/capturas/{id}', [APICartaController::class, 'destroy'])->name('api.capturas.destroy');