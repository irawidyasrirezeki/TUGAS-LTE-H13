<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/table', [App\Http\Controllers\TableController::class, 'table'])->name('table');
Route::get('/data-tables', [App\Http\Controllers\TableController::class, 'dataTables'])->name('dataTables');
