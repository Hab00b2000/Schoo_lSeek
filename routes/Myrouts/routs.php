<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\GenerController;
use App\Http\Controllers\UserController;
use App\Models\User;
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


Route::get('/show',[GenerController::class,"show"]); 
Route::get('/users',[UserController::class,"create"]); 

Route::get('/child',[ChildController::class,'index'])->name('childPage');
Route::post('/child',[ChildController::class,'store'])->name('addChild');
Route::get('/child/group',[ChildController::class,'show'])->name('MyChildren');
