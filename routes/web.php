<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website');


// Admin Login Route
Route::group(["prefix" => "admin"], function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm']);
    Route::post('/', [LoginController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/logout', [DashboardController::class, 'AdminLogout'])->name('admin.logout');

    //profile Route
    Route::get('/profile', [DashboardController::class, 'profileIndex'])->name("admin.profile");
    Route::post('/profile', [DashboardController::class, 'profileUpdate'])->name("admin.profile.update");
    Route::post('/profileImage', [DashboardController::class, 'imageUpdate'])->name("admin.profile.imageUpdate");
    // admin dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Banner Route
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
    Route::get('/banner/fetch/{id?}', [BannerController::class, 'fetch'])->name('admin.banner.fetch');
    Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::post('/banner/delete', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
    // Brand Route
    Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('/brand/fetch/{id?}', [BrandController::class, 'fetch'])->name('admin.brand.fetch');
    Route::post('/brand', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::post('/brand/delete', [BrandController::class, 'destroy'])->name('admin.brand.destroy');
    // Category Route
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/fetch/{id?}', [CategoryController::class, 'fetch'])->name('admin.category.fetch');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/category/delete', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
});
