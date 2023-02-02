<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\TechnicianController;
use App\Http\Controllers\Admin\ThanaContoller;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/product', [HomeController::class, 'ProductShow'])->name('product');
Route::get('/product-single/{slug}', [HomeController::class, 'singleProductShow'])->name('single.product');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// cart add route
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/addcart', [CartController::class, 'addCart'])->name('addcart');
Route::post('/updatecart', [CartController::class, 'updateCart'])->name('updatecart');
Route::post('/removecart', [CartController::class, 'removeCart'])->name('removecart');

// wishlist add route
Route::post('/addwishlist', [WishlistController::class, 'addWishlist'])->name('addwishlist');
Route::post('/deletewishlist', [WishlistController::class, 'deleteWishlist'])->name('deletewishlist');

//
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'CheckOut'])->name('place.order');

// Technician and customer login
Route::get('/login', [CustomerLoginController::class, 'showSignUpForm'])->name('showSignUpForm')->middleware('checkAuth');
Route::post('/customer-register', [CustomerLoginController::class, 'CustomerRegister'])->name('customer.register')->middleware('checkAuth');
Route::post('/customer-login', [CustomerLoginController::class, 'CustomerLogin'])->name('customer.login')->middleware('checkAuth');
Route::post('/technician-register', [CustomerLoginController::class, 'TechnicianRegister'])->name('technician.register')->middleware('checkAuth');
Route::post('/technician-login', [CustomerLoginController::class, 'TechnicianLogin'])->name('technician.login')->middleware('checkAuth');

Route::get("/customer-dashboard", [CustomerController::class, 'index'])->name('customer.dashboard');
Route::get("/customer-logout", [CustomerController::class, 'logout'])->name('customer.logout');


// get data from database
Route::get("/getUpazila/{id}", [HomeController::class, "getUpazila"]);

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
    // partner Route
    Route::get('/partner', [PartnerController::class, 'index'])->name('admin.partner.index');
    Route::get('/partner/fetch/{id?}', [PartnerController::class, 'fetch'])->name('admin.partner.fetch');
    Route::post('/partner', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::post('/partner/delete', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');
    // product Route
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/product/fetch/{id?}', [ProductController::class, 'fetch'])->name('admin.product.fetch');
    Route::post('/product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::post('/product/delete', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get("product/published", [ProductController::class, 'published'])->name("admin.product.published");
    Route::post("product/published", [ProductController::class, 'savePublished'])->name("admin.product.savepublished");
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
    // Route::get('/supplier', [SupplierController::class, 'index'])->name('admin.supplier.index');
    // Route::get('/supplier/fetch/{id?}', [SupplierController::class, 'fetch'])->name('admin.supplier.fetch');
    // Route::post('/supplier', [SupplierController::class, 'store'])->name('admin.supplier.store');
    // Route::post('/supplier/delete', [SupplierController::class, 'destroy'])->name('admin.supplier.destroy');

    // Purchase module route
    // purchase route
    // Route::get('/purchase', [PurchaseController::class, 'index'])->name('admin.purchase.index');
    // Route::get('/purchase/edit/{invoice?}', [PurchaseController::class, 'edit'])->name('admin.purchase.edit');
    // Route::post('/purchase/fetch', [PurchaseController::class, 'fetch'])->name('admin.purchase.fetch');
    // Route::post('/purchase', [PurchaseController::class, 'store'])->name('admin.purchase.store');
    // Route::post('/purchase/delete', [PurchaseController::class, 'destroy'])->name('admin.purchase.destroy');
    // Route::get("/purchaseList", [PurchaseController::class, 'purchaseList'])->name("admin.purchase.purchaseList");

    //order route
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order.index');
    Route::post('/order/fetch', [OrderController::class, 'fetch'])->name('admin.order.fetch');
    // blog route
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/fetch/{id?}', [BlogController::class, 'fetch'])->name('admin.blog.fetch');
    Route::post('/blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::post('/blog/delete', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    // customer route
    Route::get('/customer', [AdminCustomerController::class, 'index'])->name("admin.customer.index");
    Route::get('/customer/fetch/{id?}', [AdminCustomerController::class, 'fetch'])->name("admin.customer.fetch");
    
    // technician route
    Route::get('/technician', [TechnicianController::class, 'index'])->name("admin.technician.index");
    Route::get('/technician/fetch/{id?}', [TechnicianController::class, 'fetch'])->name("admin.technician.fetch");
});
