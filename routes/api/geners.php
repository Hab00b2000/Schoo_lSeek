<?php

use app\Http\Controllers\GenerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/show',[GenerController::class,"show"]);
/* Route::middleware('auth:sanctum')->prefix('geners')->group(function (){
    
}); */