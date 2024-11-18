<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test2', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test2');

Route::get('/test3', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test3');

Route::get('/test4', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test4');

Route::get('/test5', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test5');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
