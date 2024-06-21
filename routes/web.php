<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
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
});



// Route::view('/','InsertRead');
Route::post('insertData',[myController::class,'insert']);
Route::get('/',[myController::class,'readData']);
Route::view('update','updateView');
Route::get('updateDelete',[myController::class,'updateDelete']);

Route::get('updatedata',[myController::class,'update']);