<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AsramaController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome')->name('welcome');
})->middleware(['auth'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [homeController::class, 'index'])->middleware(['auth','admin'])->name('dashboard');
Route::get('/', [homeController::class, 'welcome'])->name('welcome');

Route::resource('contac', ContacController::class);

Route::resource('data-asrama', AsramaController::class)->middleware(['auth','admin']);
Route::get('pdf/asrama', [AsramaController::class, 'pdf']);
