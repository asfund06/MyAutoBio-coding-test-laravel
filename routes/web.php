<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', [CustomerController::class, 'customers.index']);


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CustomerController::class, 'index'])->name('customers.index');