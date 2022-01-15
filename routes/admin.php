<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;

// Route::group(['prefix' => '/'], function () {
//     Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
//     Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
//     Route::get('index', [Admin\LoginController::class, 'index'])->name('admin.index');

//     Route::group(['middleware' => ['auth:admins']], function () {

//         Route::get('/', function () {
//         return view('admins.dashboard.index');
//     })->name('admins.dashboard');
// });
// });


// Route::resource('categories', Admin\CategoryController::class);
// Route::resource('products', ProductController::class);