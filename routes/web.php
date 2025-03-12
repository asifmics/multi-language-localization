<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PdfDownloadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostExcelExportController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/posts',PostController::class)->only(['index']);
    Route::get('/posts/excel',PostExcelExportController::class)->name('posts.excel.export');
    Route::get('/posts/download',PdfDownloadController::class)->name('posts.pdf.download');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/locale/{locale}',LocalizationController::class)->name('locale');

require __DIR__.'/auth.php';
