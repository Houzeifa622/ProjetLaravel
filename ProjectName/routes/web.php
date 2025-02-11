<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/addArticle', function () {
    return view('article.add');
});

require __DIR__.'/auth.php';
