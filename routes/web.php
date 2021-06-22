<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;
// use Mail;
use App\Mail\SendMail;
use App\Jobs\ProcessPodcast;
use Carbon\Carbon;
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
Route::get('mail', function(){
    // return 'test';
    // dispatch(new ProcessPodcast());
    $job = (new ProcessPodcast())
    ->delay(Carbon::now()->addSeconds(5));
    dispatch($job);
});
Route::get('/', 'HomeController@home')->name('home');
Route::get('/price', 'HomeController@price');
Route::get('/calculate', 'HomeController@calculate');
Route::post('add-cart', 'CartController@addCart')->name('add.cart');



Route::prefix('/admin')->namespace('Admin')->group(function() {
    Route::match(['get', 'post'], '', 'AdminController@login')->name('admin');
    Route::group(['middleware' => ['admin']], function() {
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('logout', 'AdminController@logout')->name('admin.logout');
        Route::get('settings', 'AdminController@settings')->name('admin.settings');
        Route::post('check-current-password', 'AdminController@checkCurrentPassword');
        Route::post('update-current-password', 'AdminController@updateCurrentPassword')->name('admin.update.current.password');
        Route::match(['get', 'post'], 'update-admin-details', 'AdminController@updateAdminDetails')->name('admin.update.admin.details');


        Route::get('category', 'CategoryController@category')->name('admin.category');
        Route::post('add-category', 'CategoryController@add')->name('admin.add.category');
        Route::post('edit-category/{id}', 'CategoryController@edit')->name('admin.edit.category');
        Route::get('delete-category/{id}', 'CategoryController@delete')->name('delete.category');


        Route::get('item', 'ItemController@item')->name('admin.item');
        Route::post('add-item', 'ItemController@add')->name('admin.add.item');
        Route::post('edit-item/{id}', 'ItemController@edit')->name('admin.edit.item');
        Route::get('delete-item/{id}', 'ItemController@delete')->name('delete.item');


        Route::get('addon/{id}', 'AddOnController@addOn')->name('admin.addon');
        Route::post('add-addon/{id}', 'AddOnController@addAddOn')->name('admin.add.addon');
        Route::post('edit-addon/{id}', 'AddOnController@editAddOn')->name('admin.edit.addon');
        Route::get('addon/delete-attribute/{id}', 'AddOnController@delete')->name('delete.addon');

        Route::get('size/{id}', 'SizeController@size')->name('admin.size');
        Route::post('add-size/{id}', 'SizeController@addSize')->name('admin.add.size');
        Route::post('edit-size/{id}', 'SizeController@editSize')->name('admin.edit.size');
        Route::get('size/delete-attribute/{id}', 'SizeController@delete')->name('delete.size');

        Route::get('banner', 'BannerController@banner')->name('admin.banner');
        Route::post('add-banner', 'BannerController@add')->name('admin.add.banner');
        Route::post('edit-banner/{id}', 'BannerController@edit')->name('admin.edit.banner');
        Route::get('delete-banner/{id}', 'BannerController@delete')->name('delete.banner');
    });
});

