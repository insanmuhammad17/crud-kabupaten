<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaTableController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/journal', function () {
    return view('journal');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard',[NamaTableController::class, 'index'])->middleware(['auth', 'verified'])->name('nama_table.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::resource('nama_table', NamaTableController::class);
