<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController; 
use Illuminate\Support\Facades\Route;

// --- Public GET Routes ---
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sales', [PageController::class, 'sales'])->name('sales');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// --- Form Submission POST Route ---
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');