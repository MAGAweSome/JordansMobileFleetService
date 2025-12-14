<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sales', [PageController::class, 'sales'])->name('sales');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
