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

Route::get('/', 'Website\PageController@index')->name('index');


Route::group(['prefix'=>'website'], function(){


    Route::get('pages.admission-info', 'Website\PageController@admissioninfo')->name('website.addmission-info');
    Route::get('pages.aboutus', 'Website\PageController@aboutus')->name('website.aboutus');
    Route::get('pages.comon', 'Website\PageController@messageprincipal')->name('website.comon');
    Route::get('pages.gallery', 'Website\PageController@gallery')->name('website.gallery');
    Route::get('pages.contact', 'Website\PageController@contact')->name('website.contact');
    Route::get('pages.notice', 'Website\PageController@notice')->name('website.notice');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







Route::group(['prefix'=>'users','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});

Route::group(['prefix'=>'profiles','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


});




Route::group(['prefix'=>'suppliers','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\SupplierController@view')->name('suppliers.view');
    Route::get('/add', 'Backend\SupplierController@add')->name('suppliers.add');
    Route::post('/store', 'Backend\SupplierController@store')->name('suppliers.store');
    Route::get('/edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
    Route::post('/update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
    Route::get('/delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
});

Route::group(['prefix'=>'customers','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\CustomersController@view')->name('customers.view');
    Route::get('/add', 'Backend\CustomersController@add')->name('customers.add');
    Route::post('/store', 'Backend\CustomersController@store')->name('customers.store');
    Route::get('/edit/{id}', 'Backend\CustomersController@edit')->name('customers.edit');
    Route::post('/update/{id}', 'Backend\CustomersController@update')->name('customers.update');
    Route::get('/delete/{id}', 'Backend\CustomersController@delete')->name('customers.delete');
});

Route::group(['prefix'=>'units','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\UnitController@view')->name('units.view');
    Route::get('/add', 'Backend\UnitController@add')->name('units.add');
    Route::post('/store', 'Backend\UnitController@store')->name('units.store');
    Route::get('/edit/{id}', 'Backend\UnitController@edit')->name('units.edit');
    Route::post('/update/{id}', 'Backend\UnitController@update')->name('units.update');
    Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('units.delete');
});

Route::group(['prefix'=>'category','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\CategoryController@view')->name('category.view');
    Route::get('/add', 'Backend\CategoryController@add')->name('category.add');
    Route::post('/store', 'Backend\CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'Backend\CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
});

Route::group(['prefix'=>'products','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\ProductController@view')->name('products.view');
    Route::get('/add', 'Backend\ProductController@add')->name('products.add');
    Route::post('/store', 'Backend\ProductController@store')->name('products.store');
    Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
    Route::post('/update/{id}', 'Backend\ProductController@update')->name('products.update');
    Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
});
Route::group(['prefix'=>'purchase','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\PurchaseController@view')->name('purchase.view');
    Route::get('/add', 'Backend\PurchaseController@add')->name('purchase.add');
    Route::post('/store', 'Backend\PurchaseController@store')->name('purchase.store');
    Route::get('/edit/{id}', 'Backend\PurchaseController@edit')->name('purchase.edit');
    Route::post('/update/{id}', 'Backend\PurchaseController@update')->name('purchase.update');
    Route::get('/delete/{id}', 'Backend\PurchaseController@delete')->name('purchase.delete');
});



Route::get('/get-category','Backend\DefaultController@getcategory')->name('get-category');



