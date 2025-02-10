<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController; //kaitkan file controller
use App\Http\Controller\AdminController;
use App\Http\Controller\GuestController;

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

// Route::get('/', function () {
    // return view('home');
// });

Route::get('/',[SesiController::class,'index']);
Route::post('/',[SesiController::class,'login']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/guest',[GuestController::class,'login']);

Route::get('/logout',[SesiController::class,'logout']);



