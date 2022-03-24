<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ArticuloController;
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
Route::get('/', function () {
   // return view('principal');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/task', function () {
    return "hola mundo";
});
//Route::apiResource(name:'task', controller:TaskController::class);

Route::get('/articulos', [ArticuloController::class,'index']); //muestra todos los registros
Route::post('/articulos', [ArticuloController::class,'store']); // crea un registro
Route::put('/articulos/{id}', [ArticuloController::class,'update']); // actualiza un registro
Route::delete('/articulos/{id}', [ArticuloController::class,'destroy']); //elimina un registro
?>

