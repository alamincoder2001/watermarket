<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ThanaContoller;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website');


// Admin Login Route
Route::group(["prefix" => "admin"], function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm']);
    Route::post('/', [LoginController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/logout', [DashboardController::class, 'AdminLogout'])->name('admin.logout');

    // admin dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //profile Route
    Route::get('/profile', [DashboardController::class, 'profileIndex'])->name('admin.profile');
    Route::post('/profile', [DashboardController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::post('/profileImage', [DashboardController::class, 'imageUpdate'])->name('admin.profile.imageUpdate');
    //setting Route
    Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/setting', [SettingController::class, 'updateSetting'])->name('admin.setting.store');
    Route::post('/logoUpdate', [SettingController::class, 'logoUpdate'])->name('admin.setting.logoUpdate');
    Route::post('/naviconUpdate', [SettingController::class, 'naviconUpdate'])->name('admin.setting.naviconUpdate');
    
    // Website content route
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
    // Sub-Category Route
    Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
    Route::get('/subcategory/fetch/{id?}', [SubcategoryController::class, 'fetch'])->name('admin.subcategory.fetch');
    Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
    Route::post('/subcategory/delete', [SubcategoryController::class, 'destroy'])->name('admin.subcategory.destroy');
    // unit Route
    Route::get('/unit', [UnitController::class, 'index'])->name('admin.unit.index');
    Route::get('/unit/fetch/{id?}', [UnitController::class, 'fetch'])->name('admin.unit.fetch');
    Route::post('/unit', [UnitController::class, 'store'])->name('admin.unit.store');
    Route::post('/unit/delete', [UnitController::class, 'destroy'])->name('admin.unit.destroy');
    // product Route
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/product/fetch/{id?}', [ProductController::class, 'fetch'])->name('admin.product.fetch');
    Route::post('/product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::post('/product/delete', [ProductController::class, 'destroy'])->name('admin.product.destroy');

    // Administration route

    // district Route
    Route::get('/district', [DistrictController::class, 'index'])->name('admin.district.index');
    Route::get('/district/fetch/{id?}', [DistrictController::class, 'fetch'])->name('admin.district.fetch');
    Route::post('/district', [DistrictController::class, 'store'])->name('admin.district.store');
    Route::post('/district/delete', [DistrictController::class, 'destroy'])->name('admin.district.destroy');
    // thana Route
    Route::get('/thana', [ThanaContoller::class, 'index'])->name('admin.thana.index');
    Route::get('/thana/fetch/{id?}', [ThanaContoller::class, 'fetch'])->name('admin.thana.fetch');
    Route::post('/thana', [ThanaContoller::class, 'store'])->name('admin.thana.store');
    Route::post('/thana/delete', [ThanaContoller::class, 'destroy'])->name('admin.thana.destroy');
    // supplier Route
    Route::get('/supplier', [SupplierController::class, 'index'])->name('admin.supplier.index');
    Route::get('/supplier/fetch/{id?}', [SupplierController::class, 'fetch'])->name('admin.supplier.fetch');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('admin.supplier.store');
    Route::post('/supplier/delete', [SupplierController::class, 'destroy'])->name('admin.supplier.destroy');

    // Purchase module route
    // purchase route
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('admin.purchase.index');
    Route::post('/purchase/fetch', [PurchaseController::class, 'fetch'])->name('admin.purchase.fetch');
    Route::post('/purchase', [PurchaseController::class, 'store'])->name('admin.purchase.store');
    Route::post('/purchase/delete', [PurchaseController::class, 'destroy'])->name('admin.purchase.destroy');
    
});
