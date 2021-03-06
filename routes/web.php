<?php

use App\Model\Product;
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

Route::get('/test-grid', function () {
   return view('test-grid');
});

Route::get('/fetch-data', function () {
   $product = Product::select('id', 'name')->get();

   return response()->json($product);
});
Route::get('/', 'Website\PageController@index')->name('index');


/*Route::group(['prefix'=>'website'], function(){


    Route::get('pages.admission-info', 'Website\PageController@admissioninfo')->name('website.addmission-info');
    Route::get('pages.aboutus', 'Website\PageController@aboutus')->name('website.aboutus');
    Route::get('pages.comon', 'Website\PageController@messageprincipal')->name('website.comon');
    Route::get('pages.gallery', 'Website\PageController@gallery')->name('website.gallery');
    Route::get('pages.contact', 'Website\PageController@contact')->name('website.contact');
    Route::get('pages.notice', 'Website\PageController@notice')->name('website.notice');


});*/


//Supplier Login
Route::get('/supplier-login', 'Frontend\SupplierLoginController@supplierLogin')->name('supplier.login');
Route::get('/supplier-signup', 'Frontend\SupplierLoginController@supplierSignup')->name('supplier.signup');
Route::post('/supplier-store', 'Frontend\SupplierLoginController@supplierStore')->name('supplier.store');
Route::get('/email-verify', 'Frontend\SupplierLoginController@emailVerify')->name('email.verify');
Route::post('/verify-store', 'Frontend\SupplierLoginController@verifyStore')->name('verify.store');

Route::get('show-items-qty/{productid}','Frontend\TProductController@show_total_qty_by_pid');


Auth::routes();

//Customer Dashboard

Route::group(['middleware' => ['auth','supplier']], function() {
   Route::get('/dashboard', 'Frontend\DashboardController@dashboard')->name('dashboard');
    Route::post('/store', 'Frontend\DashboardController@store')->name('dashboard.store');
    Route::get('/view', 'Frontend\DashboardController@view')->name('dashboard.view');
    Route::get('/edit/{id}', 'Frontend\DashboardController@edit')->name('dashboard.edit');
    Route::post('/edit/{id}', 'Frontend\DashboardController@update')->name('dashboard.update');

    Route::prefix ('stproducts')->group (function () {


        /*Route::get('/view', 'Frontend\StproductController@view')->name('stproducts.view');*/
        Route::get('/add', 'Frontend\StproductController@add')->name('stproducts.add');
        Route::post('/store', 'Frontend\StproductController@store')->name('stproducts.store');
        Route::get('/edit/{id}', 'Frontend\StproductController@edit')->name('stproducts.edit');
        Route::post('/update/{id}', 'Frontend\StproductController@update')->name('stproducts.update');

    });






});


Route::group(['middleware' => ['auth','admin']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::prefix ('users')->group (function () {
        //admin-dashboard


        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });

    Route::prefix ('profiles')->group (function () {

        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


    });


    Route::prefix ('suppliers')->group (function () {


        Route::get('/view', 'Backend\SupplierController@view')->name('suppliers.view');
        Route::get('/add', 'Backend\SupplierController@add')->name('suppliers.add');
        Route::post('/store', 'Backend\SupplierController@store')->name('suppliers.store');
        Route::get('/edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
        Route::post('/update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
        Route::get('/delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
    });

    Route::prefix ('customers')->group (function () {


        Route::get('/view', 'Backend\CustomersController@view')->name('customers.view');
        Route::get('/add', 'Backend\CustomersController@add')->name('customers.add');
        Route::post('/store', 'Backend\CustomersController@store')->name('customers.store');
        Route::get('/edit/{id}', 'Backend\CustomersController@edit')->name('customers.edit');
        Route::post('/update/{id}', 'Backend\CustomersController@update')->name('customers.update');
        Route::get('/delete/{id}', 'Backend\CustomersController@delete')->name('customers.delete');
    });

    Route::prefix ('units')->group (function () {


        Route::get('/view', 'Backend\UnitController@view')->name('units.view');
        Route::get('/add', 'Backend\UnitController@add')->name('units.add');
        Route::post('/store', 'Backend\UnitController@store')->name('units.store');
        Route::get('/edit/{id}', 'Backend\UnitController@edit')->name('units.edit');
        Route::post('/update/{id}', 'Backend\UnitController@update')->name('units.update');
        Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('units.delete');
    });

    Route::prefix ('category')->group (function () {


        Route::get('/view', 'Backend\CategoryController@view')->name('category.view');
        Route::get('/add', 'Backend\CategoryController@add')->name('category.add');
        Route::post('/store', 'Backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}', 'Backend\CategoryController@update')->name('category.update');
        Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
    });

    Route::prefix ('datatable')->group (function () {


        Route::get('/view', 'Backend\DatatableController@view')->name('datatable.view');
        Route::get('/add', 'Backend\DatatableController@add')->name('datatable.add');
        Route::post('/store', 'Backend\DatatableController@store')->name('datatable.store');
        Route::get('/edit/{id}', 'Backend\DatatableController@edit')->name('datatable.edit');
        Route::post('/update/{id}', 'Backend\DatatableController@update')->name('datatable.update');
        Route::post('/delete/{id}', 'Backend\DatatableController@delete')->name('datatable.delete');
    });

    Route::prefix ('suppliers')->group (function () {


        Route::get('/view', 'Backend\SupplierController@view')->name('suppliers.view');
        Route::get('/add', 'Backend\SupplierController@add')->name('suppliers.add');
        Route::post('/store', 'Backend\SupplierController@store')->name('suppliers.store');
        Route::get('/edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
        Route::post('/update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
        Route::get('/delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
    });



    Route::prefix ('tproducts')->group (function () {


        Route::get('/view', 'Frontend\TProductController@view')->name('tproducts.view');
        Route::get('/add', 'Frontend\TProductController@add')->name('tproducts.add');
        Route::post('/store', 'Frontend\TProductController@store')->name('tproducts.store');
        Route::get('/edit/{id}', 'Frontend\TProductController@edit')->name('tproducts.edit');
        Route::post('/update/{id}', 'Frontend\TProductController@update')->name('tproducts.update');
        Route::post('/delete/{id}', 'Frontend\TProductController@delete')->name('tproducts.delete');


    });




    Route::prefix ('purchase')->group (function () {


        Route::get('/view', 'Backend\PurchaseController@view')->name('purchase.view');
        Route::get('/add', 'Backend\PurchaseController@add')->name('purchase.add');
        Route::post('/store', 'Backend\PurchaseController@store')->name('purchase.store');
        Route::get('/edit/{id}', 'Backend\PurchaseController@edit')->name('purchase.edit');
        Route::post('/update/{id}', 'Backend\PurchaseController@update')->name('purchase.update');
        Route::get('/delete/{id}', 'Backend\PurchaseController@delete')->name('purchase.delete');
    });


    Route::prefix ('tsuppliers')->group (function () {


        Route::get('/view', 'Backend\TsupplierController@view')->name('tsuppliers.view');
        Route::get('/draft/view', 'Backend\TsupplierController@draftView')->name('tsuppliers.draft.view');
        Route::get('/delete/{id}', 'Backend\TsupplierController@delete')->name('tsuppliers.delete');

        /* Route::post('/delete', 'Backend\TupplierController@delete')->name('tsuppliers.delete');*/
    });
});

Route::get('/get-category','Backend\DefaultController@getcategory')->name('get-category');



