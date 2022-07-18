<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkAdminContoller; 
use App\Http\Controllers\DrinkStockContoller;

Route::get('/', function () {
    return view('index');
});
Route::get('/', [DrinkStockContoller::class, 'index'])
    ->name('stock.index');


Route::get('/admin', [DrinkAdminContoller::class, 'index'])
    ->name('admin.index');
