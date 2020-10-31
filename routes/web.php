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
Auth::routes();

// Home Routes
Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new', function () {
    return view('new');
});
// User Route
Route::get('/', 'HomeController@index')->name('home');

// Cart
Route::post('/cart/{product}', 'CartController@addcart')->name('addtocart');
Route::post('/cart/check/{product}', 'CartController@CartAdd');
Route::get('/cart/check1/{product}', 'CartController@CartAdd');
Route::post('/cart/update/{product}', 'CartController@CartUpdate');
// Route::get('/cartq/update/{product}', 'CartController@CartUpdate');
Route::get('/cart/add/{product}', 'CartController@addcart')->name('addtocartfast');
Route::get('/cart/check', 'CartController@check')->name('checkcart');
Route::delete('/cart/{product}/remove', 'CartController@removeFromCart')->name('cart.remove');
Route::get('/cart/total', function () {
    return \App\Cart::total();
});
Route::get('/cart', 'CartController@show')->name('cart.show');
// Route::get('/', 'CartController@index')->name('home');
// coupon
Route::post('/coupon', 'CartController@couponAdd')->name('coupon.add');
Route::get('/coupon', 'CartController@couponRemove')->name('coupon.remove');
// Checkout page
Route::get('/shipping-address', 'ShippingAddressController@selectShippingAddress')->name('shippingAddress');
Route::post('/add-shipping-address', 'ShippingAddressController@addShippingAddress')->name('addShippingAddress');
Route::get('/add-shipping-address', 'ShippingAddressController@addShippingAddress')->name('addShippingAddress');
Route::post('/makeDefaultAddress/{address}', 'ShippingAddressController@makeDefaultAddress')->name('makeDefaultAddress');
Route::get('/checkout', 'ShippingAddressController@checkout')->name('checkout');
Route::get('/states', 'ShippingAddressController@getStates')->name('get.states');
Route::get('/lgareas/{state}', 'ShippingAddressController@getLGAreas')->name('get.lgareas');
// Order Routes

// Products Front
Route::get('/product-quick-view/{product}', 'ProductController@quickview')->name('quickview');
Route::get('/product/{product}', 'ProductController@singleProduct')->name('singleProduct');
Route::get('/product-colour-size/{product}', 'ProductController@productColourSize')->name('productColourSize.get');
Route::get('/category/{category}/subcategory/{subcategory}', 'ProductController@categoryGet')->name('category.get');

// Wishlist
Route::post('/wishlist/{product}', 'WishlistController@toggle')->name('wishlisttoggle');
Route::get('/wishlist/get/{product}', 'WishlistController@toggle');
Route::get('/cart/{product}/move', 'WishlistController@moveCartToWishlist')->name('cart.moveToWishlist');

// Frontend Settings
Route::post('/newsletter', 'FrontendController@newsletterStore')->name('newsletter.store');
Route::get('/product', 'FrontendController@getSubCategory')->name('subcategory.get');
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

        // Product
        Route::get('/product', 'Product\ProductController@index')->name('product.index');
        Route::get('/product/add', 'Product\ProductController@create')->name('product.create');
        Route::post('/product', 'Product\ProductController@store')->name('product.store');
        // Product Options
        Route::get('/product/{product}/edit', 'Product\ProductController@edit')->name('product.edit');
        Route::patch('/product/{product}', 'Product\ProductController@update')->name('product.update');
        Route::patch('/product/{product}/image', 'Product\ProductController@updateImage')->name('product.updateImage');
        Route::get('/product/{product}', 'Product\ProductController@show')->name('product.show');
        Route::get('/product/{product}/status', 'Product\ProductController@status');
        Route::post('/product/{product}', 'Product\ProductController@status')->name('product.status');
        Route::delete('/product/{product}', 'Product\ProductController@delete')->name('product.delete');


        // Ajax Get
        Route::get('get/subcategory/{category}', 'Product\ProductController@getSubCategory')->name('subcategory.get');
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
