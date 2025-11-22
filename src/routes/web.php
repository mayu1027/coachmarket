<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/', [ContactController::class, 'index'])->name('home');