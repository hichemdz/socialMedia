<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MassengerController;
use App\Http\Controllers\ProfileController; // profile controoler 
use App\Http\Controllers\Auth\AuthintcationUserController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/




Route::get('/',[HomeController::class,'index'])->middleware('auth');

Route::post('friend/',[FriendController::class,'store']);
//Route::get('massenger/{id}',[HomeController::class,'message']);

Route::resource('massengers',MassengerController::class);

Route::resource('profile',ProfileController::class);
Route::resource('post', PostController::class);




//Route::get('profile/{id?}',[HomeController::class,'show']);
// Route::post('friend/',[FriendController::class,'store']);
// //Route::get('massenger/{id}',[HomeController::class,'message']);

// Route::resource('massengers',MassengerController::class);

// Route::resource('profile',ProfileController::class);
// Route::resource('post', PostController::class);

//Route::post('register',[AuthintcationUserController::class,'register'])->name('register');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
