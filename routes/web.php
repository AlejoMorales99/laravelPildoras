<?php

use App\Http\Controllers\ProductosController;
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

Route::get('/', [ProductosController::class , "index" ] );

//Route::resource("app", testResource::class);
/*Route::get("/inicio", [ProductosController::class, 'index']);
Route::get("/create", [ProductosController::class, 'create' ] );
Route::get("/actualizar", [ProductosController::class, 'update' ] );
Route::get("/insertar", [ProductosController::class, 'store' ] );
Route::get("/borrar", [ProductosController::class, 'destroy' ] );*/


Route::resource('productos', ProductosController::class);

