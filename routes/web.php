<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PartnerController;
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
Route::get('/banner-store', [BannerController::class, 'create'])->middleware(['auth', 'verified'])->name('banner-store');
Route::get('/editbanner/{id}', [BannerController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-banner');
Route::put('/banners/{id}', [BannerController::class, 'update'])->middleware(['auth', 'verified'])->name('banners.update');
Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('banners-destroy');

//service routing 
Route::get('/service-admin', [ServiceController::class, 'index'])->middleware(['auth', 'verified'])->name('service-admin');
Route::get('/service-store', [ServiceController::class, 'create'])->middleware(['auth', 'verified'])->name('service-store');
Route::post('store-service', [ServiceController::class, 'store'])->middleware(['auth', 'verified'])->name('store-service');
Route::get('/editservice/{id}', [ServiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-service');
Route::put('/services/{id}', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('services.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services-destroy');


Route::get('/contact-admin',  [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('contact-admin');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->middleware(['auth', 'verified'])->name('contacts.update');

Route::get('/logo',  [LogoController::class, 'index'])->middleware(['auth', 'verified'])->name('logo');
Route::get('/edit-logo/{id}', [LogoController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-logo');
Route::put('/logo-edit/{id}', [LogoController::class, 'updateLogo'])->middleware(['auth', 'verified'])->name('logo-edit');
Route::post('logo-store', [LogoController::class, 'store'])->middleware(['auth', 'verified'])->name('logo-store');
Route::post('/logos/{id}/update', [LogoController::class, 'update'])->middleware(['auth', 'verified'])->name('logos.update');
Route::delete('/logo/{id}', [LogoController::class, 'destroy'])->name('logo-destroy');


Route::get('/partner',  [PartnerController::class, 'index'])->middleware(['auth', 'verified'])->name('partner');
Route::post('partner-store', [PartnerController::class, 'store'])->middleware(['auth', 'verified'])->name('partner-store');

Route::get('/edit-partner/{id}', [PartnerController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-partner');
Route::put('/partner-edit/{id}', [PartnerController::class, 'update'])->middleware(['auth', 'verified'])->name('partner-edit');
Route::delete('/partner/{id}', [PartnerController::class, 'destroy'])->name('partner-destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
