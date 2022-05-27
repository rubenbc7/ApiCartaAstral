<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CartaController as APICartaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/capturas',[APICartaController::class, 'index'])-> name('api.capturas.index');
Route::get('/capturas/create', 
[APICartaController::class, 'create'])->
                name('api.capturas.create');
Route::post('/capturas',[APICartaController::class, 'store'])-> name('api.capturas.store');
Route::delete('/capturas/{id}', [APICartaController::class, 'destroy'])->name('api.capturas.destroy');