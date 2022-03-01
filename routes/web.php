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

// Route::get('/', function () {
//     return view('users.home.welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart');

//Route::get('/home/product', [App\Http\Controllers\HomeController::class, 'allproduct'])->name('allproduct');

//Route Product Details
Route::get('/productdetail', function () {
    return view('user.home.productdetail');
});

//Route Products
Route::get('/product', function () {
	return view('users.home.product');});
//Route Product/{id}
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'productdetail'])->name('productdetail');

//Cart Route
Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');

//Admin Route
Route::get('admin','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
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


// Route::get('/login','Auth\EmployeeAuthController@getLogin')->name('employeeLogin');
// Route::post('/login', 'Auth\EmployeeAuthController@postLogin')->name('employeeLoginPost');
// Route::get('/logout', 'Auth\EmployeeAuthController@logout')->name('employeeLogout');

// Route::group(['prefix' => 'employee','middleware' => 'employeeauth'], function () {
// 	// Employee Dashboard
// 	Route::get('edashboard','EmployeeController@dashboard')->name('edashboard');	
// });


