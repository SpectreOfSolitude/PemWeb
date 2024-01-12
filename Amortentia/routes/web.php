<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('login');
});
Route::get('/amortentia', [userController::class, 'login'])->name('login');
Route::get('/amortentia/register', [userController::class, 'register'])->name('register');
Route::post('/amortentia/registerAcc', [userController::class, 'registerAccount'])->name('user.register');
Route::post('/amortentia/loginAcc', [userController::class, 'loginAccount'])->name('user.login');


Route::get('/amortentia/home', [homeController::class, 'home'])->name('home');
