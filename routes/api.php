<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BebeController;

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

Route::get('bebes', 'Api\BebeController@bebes');
Route::post('crear_bebe', 'Api\BebeController@crearBebe');
Route::post('editar_bebe', 'Api\BebeController@editarBebe');
Route::post('eliminar_bebe', 'Api\BebeController@eliminarBebe');
