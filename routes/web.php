<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [DataController::class, 'index'])->name('home');
Route::get('/products/{id}', [DataController::class, 'show'])->name('products.detail');
Route::get('/pengaspalan', function () {
return view('pengaspalan');
})->name('pengaspalan');
Route::get('/alat-berat', function () {
    return view('alatberat');
})->name('alatberat');
Route::get('/sewa-truck', function () {
    return view('sewatruck');
})->name('sewatruck');
Route::get('/material-pengaspalan', function () {
    return view('material');
})->name('material');

