<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes untuk modul perpustakaan
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('members', MemberController::class);
Route::resource('loans', LoanController::class);
Route::put('/loans/{id}/kembalikan', [LoanController::class, 'kembalikan'])
    ->name('loans.kembalikan');

// Route Group dengan prefix /admin (Tugas Mandiri Pertemuan 2)
Route::prefix('admin')->group(function () {
    Route::get('/info', function () {
        return 'Panel Admin Perpustakaan - Informasi Sistem v1.0';
    });
});