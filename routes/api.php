<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/transaction', [App\Http\Controllers\Api\TransactionController::class, 'transaction'])->name('transaction');
Route::delete('/customer/delete/{id}', [App\Http\Controllers\Api\CustomerController::class, 'delete'])->name('delete');