<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::post('sendemail', [EmailController::class, 'sendEmail'])->name('sendemail');
