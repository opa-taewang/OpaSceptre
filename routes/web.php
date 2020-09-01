<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/new', function() {
    return view('new');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/product-quick-view', function () {
    return view('ajax.product-quick-view');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Frontend Settings
Route::post('/newsletter', 'FrontendController@newsletterStore')->name('newsletter.store');
// Admin route
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']],
    function(){
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        // Category
        Route::get('/category', 'Category\CategoryController@index')->name('category.show');
        Route::post('/category', 'Category\CategoryController@create')->name('category.create');
        Route::get('/category/{category}/edit', 'Category\CategoryController@edit')->name('category.edit');
        Route::patch('/category/{category}', 'Category\CategoryController@update')->name('category.update');
        Route::delete('/category/{category}', 'Category\CategoryController@delete')->name('category.delete');

        // SubCategory
        Route::get('/subcategory', 'SubCategory\SubCategoryController@index')->name('subcategory.show');
        Route::post('/subcategory', 'SubCategory\SubCategoryController@create')->name('subcategory.create');
        Route::get('/subcategory/{subcategory}/edit', 'SubCategory\SubCategoryController@edit')->name('subcategory.edit');
        Route::patch('/subcategory/{subcategory}', 'SubCategory\SubCategoryController@update')->name('subcategory.update');
        Route::delete('/subcategory/{subcategory}', 'SubCategory\SubCategoryController@delete')->name('subcategory.delete');

        // Brand
        Route::get('/brand', 'Brand\BrandController@index')->name('brand.show');
        Route::post('/brand', 'Brand\BrandController@create')->name('brand.create');
        Route::get('/brand/{brand}/edit', 'Brand\BrandController@edit')->name('brand.edit');
        Route::patch('/brand/{brand}', 'Brand\BrandController@update')->name('brand.update');
        Route::delete('/brand/{brand}', 'Brand\BrandController@delete')->name('brand.delete');

        // Coupon
        Route::get('/coupon', 'coupon\CouponController@index')->name('coupon.show');
        Route::post('/coupon', 'Coupon\CouponController@create')->name('coupon.create');
        Route::get('/coupon/{coupon}/edit', 'Coupon\CouponController@edit')->name('coupon.edit');
        Route::patch('/coupon/{coupon}', 'Coupon\CouponController@update')->name('coupon.update');
        Route::delete('/coupon/{coupon}', 'Coupon\CouponController@delete')->name('coupon.delete');

        // Others
        Route::get('/newsletter', 'Others\OthersController@newsletter')->name('newsletter.show');
        Route::get('/newsletter/{newsletter}/edit', 'Others\OthersController@newsletterEdit')->name('newsletter.edit');
        Route::patch('/newsletter/{newsletter}', 'Others\OthersController@newsletterUpdate')->name('newsletter.update');
        Route::delete('/newsletter/{newsletter}', 'Others\OthersController@newsletterDelete')->name('newsletter.delete');

        // Account Info and settings
        Route::get('/account/passwords/change', 'AccountController@changepassword')->name('change-password');
        Route::get('/account/passwords', 'AccountController@submitchangepassword')->name('change-password.update');
        Route::patch('/profile', 'AccountController@profile')->name('profile');
    }
);
