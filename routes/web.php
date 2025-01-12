<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\EnsureAuthenticated;

// Route::middleware(['web'])->group(function () {
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(EnsureAuthenticated::class)->group(function () {
    Route::get('/kandidat', [KandidatController::class, "showKandidat"])->name('dashboard');
    // Route::get('/kandidat/{id}', [KandidatController::class, 'showKandidat'])->whereUlid('id')->name('kandidat');
});

Route::fallback([NotFoundController::class, '__invoke']);
// });
