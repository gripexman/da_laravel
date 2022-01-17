<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\ProductController;

Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard','Admin\AdminController@dashboard')->name('dashboard');

	Route::resource('products', Admin\ProductController::class);
	Route::resource('categories', Admin\CategoryController::class);
	Route::resource('users', Admin\UserController::class);
	//Invoice Input
	Route::resource('invoiceinput', Admin\InvoiceInputController::class);
	
	// Department Resource
	Route::resource('depart', Admin\DepartmentController::class);

	// Employee Resource
	Route::resource('employee', 'Admin\EmployeeController');

});



