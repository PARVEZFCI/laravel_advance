<?php

use Illuminate\Support\Facades\Route;

use App\Jobs\SendWelcomeEmailJob;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;


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

Route::get('test', function () {
    dispatch(new SendWelcomeEmailJob());
    dd("test");
    
});

Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::post('/users/search', [UserController::class,'search'])->name('users.search');
Route::get('/event', [EventController::class, 'index']);
Route::get('/orders',[OrderController::class,'index'])->name('orders.index');
