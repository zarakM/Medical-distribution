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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('company', function () {
    return view('layouts.company.register_company');
})->name('registercompany');

Route::get('registredcompanies', function () {
    return view('layouts.company.registred_companies');
})->name('registredcompanies');

Route::get('product', function () {
    return view('layouts.products.add_product');
})->name('addproducts');

Route::get('viewproduct', function () {
    return view('layouts.products.view_product');
})->name('viewproducts');


Route::get('addstock', function () {
    return view('layouts.stock.add_stock');
})->name('addstock');

Route::get('viewstock', function () {
    return view('layouts.stock.available_stock');
})->name('viewstock');


Route::get('addcustomer', function () {
    return view('layouts.customer.add_customer');
})->name('addcustomer');

Route::get('viewcustomer', function () {
    return view('layouts.customer.customer_list');
})->name('viewcustomer');

Route::get('addsalesman', function () {
    return view('layouts.saleman.add_saleman');
})->name('addsaleman');

Route::get('viewsaleman', function () {
    return view('layouts.saleman.view_saleman');
})->name('viewsaleman');

Route::get('companyorder', function () {
    return view('layouts.orders.company_order');
})->name('companyorder');

Route::get('customerorder', function () {
    return view('layouts.orders.customer_order');
})->name('customerorder');

Route::get('area', function () {
    return view('layouts.area');
})->name('area');

Route::get('city', function () {
    return view('layouts.city');
})->name('city');

Route::post('save_area','AreaController@store')->name('save_area');

Route::post('save_city','CityController@store')->name('save_city');

Route::post('save_company','CompanyController@store')->name('save_company');

Route::post('save_customer','CustomerController@store')->name('save_customer');

Route::post('save_product','ProductController@store')->name('save_product');

Route::post('save_customer_order','CustomerOrderController@store')->name('save_customer_order');

Route::post('save_purchase_order','PurchaseOrderController@store')->name('save_purchase_order');

Route::post('save_salesman','SalesmanController@store')->name('save_salesman');

Route::post('save_stock','StockController@store')->name('save_stock');