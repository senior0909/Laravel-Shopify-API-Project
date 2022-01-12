<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Producers;
use App\Http\Controllers\Statis;
use App\Http\Controllers\ForgotPasswordController;
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

Route::get('/yahooOrders',function () {
    return view('yahoo/orders');
});

Route::get('/yahooCallback',function () {
    return view('yahoo/callback');
});


/////////////////////////////////////////////////////


Route::get('/', function () {
    return view('login');
});


Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/users', [User::class, 'index']);
Route::get('/logout', [User::class, 'logout']);
Route::get('/orders', [Orders::class, 'index']);
Route::get('/producers', [Producers::class, 'index']);
Route::get('/statis', [Statis::class, 'index']);
Route::get('/getOrders', [Orders::class, 'getOrders']);

Route::post('/login', [User::class, 'login']);
Route::post('/setUser', [User::class, 'setUser']);
Route::post('/updateUser', [User::class, 'updateUser']);
Route::post('/setOrders', [Producers::class, 'setOrders']);
Route::post('/setDelivered', [Producers::class, 'setDelivered']);

