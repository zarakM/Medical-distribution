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

Route::get('product', function () {
    return view('layouts.products.add_product');
})->name('addproducts');

Route::get('addstock', function () {
    return view('layouts.stock.add_stock');
})->name('addstock');

Route::get('addcustomer', function () {
    return view('layouts.customer.add_customer');
})->name('addcustomer');

Route::get('addsalesman', function () {
    return view('layouts.saleman.add_saleman');
})->name('addsaleman');

Route::get('companyorder', function () {
    return view('layouts.orders.company_orderf');
})->name('companyorder');

Route::get('customerorder', function () {
    return view('layouts.orders.customer_orderf');
})->name('customerorder');

Route::get('area', function () {
    return view('layouts.area');
})->name('area');

Route::get('city', function () {
    return view('layouts.city');
})->name('city');


Route::get('show','AreaController@show')->name('show');

Route::get('viewcompanies','CompanyController@show')->name('viewcompanies');

Route::get('viewproduct', 'ProductController@show')->name('viewproducts');

Route::get('viewstock','StockController@show')->name('viewstock');

Route::get('viewcustomer','CustomerController@show')->name('viewcustomer');

Route::get('viewsaleman','SalesmanController@show')->name('viewsaleman');

Route::get('viewCompanyOrder','PurchaseOrderController@show')->name('viewCompanyOrder');

Route::get('viewCustomerOrder','CustomerOrderController@show')->name('viewCustomerOrder');


Route::post('save_area','AreaController@store')->name('save_area');

Route::post('save_city','CityController@store')->name('save_city');

Route::post('save_company','CompanyController@store')->name('save_company');

Route::post('save_customer','CustomerController@store')->name('save_customer');

Route::post('save_product','ProductController@store')->name('save_product');

Route::post('save_customer_order','CustomerOrderController@store')->name('save_customer_order');

Route::post('save_purchase_order','PurchaseOrderController@store')->name('save_purchase_order');

Route::post('save_salesman','SalesmanController@store')->name('save_salesman');

Route::post('save_stock','StockController@store')->name('save_stock');


Route::get('destroy_area/{id}','AreaController@destroy')->name('destroy_area');

Route::get('destroy_city/{id}','CityController@destroy')->name('destroy_city');

Route::get('destroy_company/{id}','CompanyController@destroy')->name('destroy_company');

Route::get('destroy_customer/{id}','CustomerController@destroy')->name('destroy_customer');

Route::get('destroy_product/{id}','ProductController@store')->name('destroy_product');

Route::get('destroy_customer_order','CustomerOrderController@destroy')->name('destroy_customer_order');

Route::get('destroy_purchase_order','PurchaseOrderController@destroy')->name('destroy_purchase_order');

Route::get('destroy_salesman/{id}','SalesmanController@destroy')->name('destroy_salesman');

Route::get('destroy_stock/{id}','StockController@destroy')->name('destroy_stock');

Route::get('destroy_area/{id}','AreaController@destroy')->name('destroy_area');



Route::post('update_company','CompanyController@update')->name('update_company');

Route::post('update_customer','CustomerController@update')->name('update_customer');

Route::post('update_product','ProductController@update')->name('update_product');

Route::post('update_customer_order','CustomerOrderController@update')->name('update_customer_order');

Route::post('update_purchase_order','PurchaseOrderController@update')->name('update_purchase_order');

Route::post('update_salesman','SalesmanController@update')->name('update_salesman');

Route::post('update_stock','StockController@update')->name('update_stock');


Route::get('update_view_company',function(){
    return view("layouts.company.update_company");
})->name('update_view_company');

Route::get('update_view_customer',function(){
    return view("layouts.customer.update_customer");
})->name('update_view_customer');

Route::get('update_view_product',function(){
    return view("layouts.products.update_product");
})->name('update_view_product');

Route::get('update_view_customer_order',function(){
    return view("layouts.orders.update_customer_order");
})->name('update_view_customer_order');

Route::get('update_view_purchase_order',function(){
    return view("layouts.orders.update_company_order");
})->name('update_view_purchase_order');

Route::get('update_view_salesman',function(){
    return view("layouts.saleman.update_saleman");
})->name('update_view_salesman');

Route::get('update_view_stock',function(){
    return view("layouts.stock.update_stock");
})->name('update_view_stock');
