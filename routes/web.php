<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Icontroller;
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

Route::get("session-form",[Icontroller::class,'session']);
Route::post("session-form-submit",[Icontroller::class,'sfm']);
Route::get("/home",[Icontroller::class,'home']);
Route::get("/logout-user",[Icontroller::class,'logout']);