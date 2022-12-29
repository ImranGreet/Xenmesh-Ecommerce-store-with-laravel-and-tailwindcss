<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;



/*Homogenus Page Controller*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('product/{id}','getProDetails')->where('id', '[0-9]+')->name('product_details');
});


Route::controller(AdminController::class)->prefix('admin')->group(function () {
    // Route::get('/', 'show')->name('index');
    Route::get('/registration', 'AdminRegistrationPath')->name('admin_registration_path');
    Route::get('/login', 'adminLoginPath')->name('adminlogin_path');
    Route::post('/registration','AdminRegistration')->name('admin-reg');
    Route::post('/login','adminLogin')->name('adminlogin');
    Route::post('/logout','adminLogOut')->name('adminlogout');
});


Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('/registration', 'index')->name('user_reg_page');
    Route::get('/login', 'loginpage')->name('user_login_page');
    Route::post('/registration','userRegistration')->name('add_user');
    Route::post('/login','userLogin')->name('user_login');
    Route::post('/logout','userLogOut')->name('user_logout');
    Route::get('/contact', 'user_contact')->name('user_contact');
});

Route::controller(ProductController::class)->prefix('product')->group(function () {
    Route::get('/add_product', 'show')->name('show')->middleware('is-admin');
    Route::get('/edit_product/{product_id}', 'update_way')->name('update_product')->middleware('is-admin');
    Route::post('/add_product', 'insertNewProduct')->name('add_product')->middleware('is-admin');
    Route::put('/add_product', 'insertNewProduct')->name('edit_product')->middleware('is-admin');
    Route::get('/operation/{admin_id}','product_crud')->where('admin_id', '[0-9]+')->name('pro_crud')->middleware(isAdmin::class);
});

Route::controller(CartController::class)->prefix('user')->group(function () {
    Route::get('/cart', 'goToCart')->name('cart');
    Route::get('/wish', 'goToWish')->name('wish');
});


/*profile*/
Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/admin', 'showAdminProfile')->name('admin_profile');
});


Route::get('/gallery', function () {
    return view('userPages.Products_byCat');
})->name('category');

/*universal*/
Route::get('/way', function () {
    return view('layouts.AllUser');
});


Route::controller(SuperAdminController::class)->prefix('super')->group(function () {
     Route::get('/reg','getsuperAdmin_registration_path')->name('author_reg_path');
     Route::get('/login','getsuperAdmin_login_path')->name('author_login');
     Route::post('/registration', 'AuthorRegistration')->name('author_registration');
    Route::post('/login', 'authorLogin')->name('author_login');
    /*operation*/
    Route::get('/author/{author_id}','authoraization')->name('author');
});