<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;

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

Route::get('businesses',[BusinessController::class,'index'])->name('businesses.index');
Route::post('businesses',[BusinessController::class,'store'])->name('businesses.store');
Route::get('user/{user}',[UserController::class, 'show']);
Route::get('users',[UserController::class, 'index'])->name('user.index');
Route::get('', function(){
    return view('welcome');
});