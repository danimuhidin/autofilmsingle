<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/outlet', [HomeController::class, 'outlet'])->name('outlet');
Route::get('/partner', [HomeController::class, 'partner'])->name('partner');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/detail-produk/{id}', [HomeController::class, 'detail_produk'])->name('detail-produk');
Route::get('/kategori-produk', [HomeController::class, 'kategori_produk'])->name('kategori-produk');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [HomeController::class, 'artikel_detail'])->name('artikel-detail');

Auth::routes();
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->except(['show', 'create']);
    Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class)->except(['show', 'create']);
    Route::resource('outlets', \App\Http\Controllers\Admin\OutletController::class)->except(['show', 'create']);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except(['show', 'create']);
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['show', 'create']);
    Route::resource('heroes', \App\Http\Controllers\Admin\HeroController::class)->except(['show', 'create']);
    Route::resource('jumbotrons', \App\Http\Controllers\Admin\JumbotronController::class)->except(['show', 'create']);
    Route::resource('youtubes', \App\Http\Controllers\Admin\YoutubeController::class)->except(['show', 'create']);
    Route::resource('visions', \App\Http\Controllers\Admin\VisionController::class)->except(['show', 'create']);
    Route::resource('missions', \App\Http\Controllers\Admin\MissionController::class)->except(['show', 'create']);
    Route::resource('bios', \App\Http\Controllers\Admin\BioController::class)->except(['show', 'create']);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class)->except(['show', 'create']);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class)->except(['show', 'create']);
    Route::resource('artikels', \App\Http\Controllers\Admin\ArtikelController::class)->except(['show', 'create']);
    
    // Product Types Routes
    Route::get('products/{product}/types', [\App\Http\Controllers\Admin\ProductTypeController::class, 'index'])->name('product-types.index');
    Route::post('product-types', [\App\Http\Controllers\Admin\ProductTypeController::class, 'store'])->name('product-types.store');
    Route::get('product-types/{type}/edit', [\App\Http\Controllers\Admin\ProductTypeController::class, 'edit'])->name('product-types.edit');
    Route::put('product-types/{type}', [\App\Http\Controllers\Admin\ProductTypeController::class, 'update'])->name('product-types.update');
    Route::delete('product-types/{type}', [\App\Http\Controllers\Admin\ProductTypeController::class, 'destroy'])->name('product-types.destroy');
});