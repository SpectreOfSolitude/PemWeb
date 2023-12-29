<?php

use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('start');
});

Route::get('/Home', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('start');
});
Route::get('/register', [userController::class, 'showRegister'] )->name('register');
Route::post('/regist', [userController::class, 'registration'] )->name('register.user');

Route::get('/login', [userController::class, 'showLogin'] )->name('login');
