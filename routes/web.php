<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::post('sendemail', [EmailController::class, 'sendEmail'])->name('sendemail');

Route::get('/dashboard', [BannerController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/testimoni', function () {
    return view('admin/testimoni');
})->middleware(['auth', 'verified'])->name('testimoni');


//banner routing
Route::post('store-banner', [BannerController::class, 'store'])->middleware(['auth', 'verified'])->name('store-banner');
Route::get('/editbanner/{id}', [BannerController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-banner');
Route::put('/banners/{id}', [BannerController::class, 'update'])->middleware(['auth', 'verified'])->name('banners.update');

//service routing 
Route::get('/service-admin', [ServiceController::class, 'index'])->middleware(['auth', 'verified'])->name('service-admin');
Route::get('/service-store', [ServiceController::class, 'create'])->middleware(['auth', 'verified'])->name('service-store');
Route::post('store-service', [ServiceController::class, 'store'])->middleware(['auth', 'verified'])->name('store-service');
Route::get('/editservice/{id}', [ServiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-service');
Route::put('/services/{id}', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('services.update');

Route::get('/contact-admin',  [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('contact-admin');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->middleware(['auth', 'verified'])->name('contacts.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
