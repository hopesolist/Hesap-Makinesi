<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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


Route::get('/calculator', [CalculatorController::class, 'index'])->name('calcl');

Route::post('/topla', [CalculatorController::class, 'topla'])->name('topla');
Route::post('/cikar', [CalculatorController::class, 'cikar'])->name('cikar');
Route::post('/bol', [CalculatorController::class, 'bol'])->name('bol');
Route::post('/carp', [CalculatorController::class, 'carp'])->name('carp');
