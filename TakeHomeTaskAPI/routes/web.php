<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


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
 return view('welcome');
});

// Route::get('/getNama', function () {
//    // URL API yang akan diakses
//    $apiUrl = 'http://127.0.0.1:8000/api/names';

//    // Melakukan GET request ke API
//    $response = Http::get($apiUrl);

//    // Mendapatkan data dari response
//    $data = $response->json();

//    return view('home')->with('apiData', $data);
// })->name('panggil');
