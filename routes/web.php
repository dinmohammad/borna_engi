<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerSectionController;

Route::get('/', function () {
    return view('frontend.pages.landing.index');
});
Route::get('/about-us', function () {
    return view('frontend.pages.about.index');
});
Route::get('/our-service', function () {
    return view('frontend.pages.service.index');
});
Route::get('/propertice', function () {
    return view('frontend.pages.propertice.index');
});
Route::get('/gallary', function () {
    return view('frontend.pages.gallary.index');
});
Route::get('/contact-us', function () {
    return view('frontend.pages.contact.index');
});


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/banner-slider/all', [BannerSectionController::class, 'index'])->name('banner-slider.index');
    Route::get('/banner-slider/create', [BannerSectionController::class, 'create'])->name('banner-slider.create');
    Route::post('/banner-slider/store', [BannerSectionController::class, 'store'])->name('banner-slider.store');
    Route::get('/banner-slider/edit/{id}', [BannerSectionController::class, 'edit'])->name('banner-slider.edit');
    Route::put('/banner-slider/update/{id}', [BannerSectionController::class, 'update'])->name('banner-slider.update');
    Route::get('/banner-slider/active/{id}', [BannerSectionController::class, 'active'])->name('banner-slider.active');
    Route::get('/banner-slider/inActive/{id}', [BannerSectionController::class, 'inActive'])->name('banner-slider.inActive');

});


Route::middleware('auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
