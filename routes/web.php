<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerSectionController;
use App\Http\Controllers\Admin\YoutubeVideoController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientTestimonialsController;

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


     // ========== Product Controller ============
     Route::get('/product/all', [ProductController::class, 'index'])->name('product.index');
     Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
     Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
     Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
     Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
     Route::get('/product/active/{id}', [ProductController::class, 'active'])->name('product.active');
     Route::get('/product/inActive/{id}', [ProductController::class, 'inActive'])->name('product.inActive');
     Route::get('/get-districts-by-division/{id}', [ProductController::class, 'getDistrictsByDivision'])->name('districtsByDivision.get');

    // ========== Banner Slider ============
    Route::get('/banner-slider/all', [BannerSectionController::class, 'index'])->name('banner-slider.index');
    Route::get('/banner-slider/create', [BannerSectionController::class, 'create'])->name('banner-slider.create');
    Route::post('/banner-slider/store', [BannerSectionController::class, 'store'])->name('banner-slider.store');
    Route::get('/banner-slider/edit/{id}', [BannerSectionController::class, 'edit'])->name('banner-slider.edit');
    Route::put('/banner-slider/update/{id}', [BannerSectionController::class, 'update'])->name('banner-slider.update');
    Route::get('/banner-slider/active/{id}', [BannerSectionController::class, 'active'])->name('banner-slider.active');
    Route::get('/banner-slider/inActive/{id}', [BannerSectionController::class, 'inActive'])->name('banner-slider.inActive');


    // ========== Youtube Video Slider ============
    Route::get('/youtube-video/all', [YoutubeVideoController::class, 'index'])->name('youtube-video.index');
    Route::get('/youtube-video/create', [YoutubeVideoController::class, 'create'])->name('youtube-video.create');
    Route::post('/youtube-video/store', [YoutubeVideoController::class, 'store'])->name('youtube-video.store');
    Route::get('/youtube-video/edit/{id}', [YoutubeVideoController::class, 'edit'])->name('youtube-video.edit');
    Route::put('/youtube-video/update/{id}', [YoutubeVideoController::class, 'update'])->name('youtube-video.update');
    Route::get('/youtube-video/active/{id}', [YoutubeVideoController::class, 'active'])->name('youtube-video.active');
    Route::get('/youtube-video/inActive/{id}', [YoutubeVideoController::class, 'inActive'])->name('youtube-video.inActive');

    // ========== Testimonials ============
    Route::get('/testimonials/all', [ClientTestimonialsController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/create', [ClientTestimonialsController::class, 'create'])->name('testimonials.create');
    Route::post('/testimonials/store', [ClientTestimonialsController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/edit/{id}', [ClientTestimonialsController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/update/{id}', [ClientTestimonialsController::class, 'update'])->name('testimonials.update');
    Route::get('/testimonials/active/{id}', [ClientTestimonialsController::class, 'active'])->name('testimonials.active');
    Route::get('/testimonials/inActive/{id}', [ClientTestimonialsController::class, 'inActive'])->name('testimonials.inActive');
});


Route::middleware('auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
