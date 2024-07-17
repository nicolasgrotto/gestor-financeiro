<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/earnings', [EarningController::class, 'store'])->middleware('auth')->name('earnings.store');
Route::post('/expenses', [ExpenseController::class, 'store'])->middleware('auth')->name('expenses.store');

Route::get('/histórico', [HistoryController::class, 'index'])->middleware(['auth', 'verified'])->name('history');

require __DIR__.'/auth.php';
