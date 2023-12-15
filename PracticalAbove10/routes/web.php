<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/pesan', [
    DataController::class,
    'Empty'
])->name('EmptyControl');

Route::post('/submit-data', [
    DataController::class,
    'submitData'
])->name('submit-data');

Route::get('/', function () {
    return redirect()->route('EmptyControl');
});
