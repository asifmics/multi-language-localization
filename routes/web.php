<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PdfDownloadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/','dashboard' );

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/posts',PostController::class)->only(['index']);
    Route::get('/posts/download',PdfDownloadController::class)->name('posts.pdf.download');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
