<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [AuthController::class, 'login'])->name('login');
    Route::post('/sign-in', [AuthController::class, 'authenticate']);

    Route::get('/sign-up', [AuthController::class, 'register'])->name('register');
    Route::post('/sign-up', [AuthController::class, 'registerUser']);
});

Route::get('/dashboard', function () {
    $user = auth()->user();
    $expenses = $user->expenses()->sum('amount');
    $deposits = $user->deposits()->sum('amount');

    return view('auth.dashboard', compact('expenses', 'deposits', 'user'));
})->middleware('auth')->name('dashboard');

Route::post('deposit',[DepositController::class, 'store'])->name('deposit.store')->middleware('auth');
Route::post('expense',[ExpenseController::class, 'store'])->name('expense.store')->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
