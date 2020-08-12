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
// Admin
Route::get('/admin', function () {
    return view('ajax.product-quick-view');
});
// Admin route
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']],
    function(){
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    }
);
