<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PusherNotificationController;
use App\Http\Controllers\UserController;
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

Route::get('/notification', function () {
    return view('notifications');
});
 
Route::get('/send',[PusherNotificationController::class, 'notification']);

Route::get('/real-time',[UserController::class, 'index']);
Route::post('/data',[UserController::class, 'store']);