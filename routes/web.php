<?php

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
Route::get('/',[App\Http\Controllers\MessageController::class,'index']);
Route::post('storeMessage',[App\Http\Controllers\MessageController::class,'store'])->name("storeMessage");

Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('dashboard');
Route::get('quotes', 'UserController@index')->name('quotes');
Route::get('quote/{customer}', 'UserController@show')->name('customer.show');
Route::post('quote/save', 'UserController@store')->name('customer.save');
Route::post('quote/delete', 'UserController@destroy')->name('customer.delete');

Route::get('categories', 'ProductController@categories')->name('categories');
Route::post('category/save', 'ProductController@storeCategory')->name('category.save');
Route::post('category/delete', 'ProductController@deleteCategory')->name('category.delete');

Route::get('items', 'ProductController@items')->name('items');
Route::post('item/save', 'ProductController@storeItem')->name('item.save');
Route::post('item/delete', 'ProductController@deleteItem')->name('item.delete');

Route::get('appliances', 'ProductController@appliances')->name('appliances');
Route::post('appliance/save', 'ProductController@storeAppliance')->name('appliance.save');
Route::post('appliance/delete', 'ProductController@deleteAppliance')->name('appliance.delete');

Route::get('packages', 'ProductController@packages')->name('packages');
Route::post('package/save', 'ProductController@storePackage')->name('package.save');
Route::post('package/delete', 'ProductController@deletePackage')->name('package.delete');

Route::get('settings', 'AdminController@settings')->name('settings');
Route::post('settings/save', 'AdminController@storeSettings')->name('settings.save');

Route::get('admins', 'AdminController@admins')->name('admins');
Route::post('admin/save', 'AdminController@saveAdmin')->name('admin.save');
Route::post('admin/delete', 'AdminController@deleteAdmin')->name('admin.delete');
