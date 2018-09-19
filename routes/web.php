<?php

/*
|------------------------------------------0--------------------------------
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

Route::get('addproducts', 'ProductController@edit')->name('addproducts')->middleware('auth');

Route::get('addcustomer', function () {
    return view('layouts.customer.add_customer');
})->name('addcustomer')->middleware('auth');

Route::get('addsalesman', function () {
    return view('layouts.saleman.add_saleman');
})->name('addsaleman')->middleware('auth');

Route::get('companyorder', function () {
    return view('layouts.orders.company_orderf');
})->name('companyorder')->middleware('auth');

Route::get('customerorder', function () {
    return view('layouts.orders.customer_orderf');
})->name('customerorder')->middleware('auth');

Route::get('area', function () {
    return view('layouts.area');
})->name('area')->middleware('auth');

Route::get('city', function () {
    return view('layouts.city');
})->name('city')->middleware('auth');

Route::get('addstrength', function () {
    return view('layouts.products.add_strength');
})->name('addstrength')->middleware('auth');

///////////////////////////////////////// Show  /////////////////////////////////////////////////

Route::get('show','AreaController@show')->name('show')->middleware('auth');

Route::get('viewcompanies','CompanyController@show')->name('viewcompanies')->middleware('auth');

Route::get('viewproduct', 'ProductController@show')->name('viewproducts')->middleware('auth');

Route::get('viewstock','StockController@show')->name('viewstock')->middleware('auth');

Route::get('viewcustomer','CustomerController@show')->name('viewcustomer')->middleware('auth');

Route::get('viewsaleman','SalesmanController@show')->name('viewsaleman')->middleware('auth');

Route::get('viewCompanyOrder','PurchaseOrderController@show')->name('viewCompanyOrder')->middleware('auth');

Route::get('viewCustomerOrder','CustomerOrderController@show')->name('viewCustomerOrder')->middleware('auth');

///////////////////////////////////////// Insert  ////////////////////////////////////////////////

Route::post('save_area','AreaController@store')->name('save_area')->middleware('auth');

Route::post('save_city','CityController@store')->name('save_city')->middleware('auth');

Route::post('salemanve_company','CompanyController@store')->name('save_company')->middleware('auth');

Route::post('save_customer','CustomerController@store')->name('save_customer')->middleware('auth');

Route::post('save_strength','StrengthController@store')->name('save_strength')->middleware('auth');

Route::post('save_product','ProductController@store')->name('save_product')->middleware('auth');

Route::post('save_customer_order','CustomerOrderController@store')->name('save_customer_order')->middleware('auth');

Route::post('save_purchase_order','PurchaseOrderController@store')->name('save_purchase_order')->middleware('auth');

Route::post('save_salesman','SalesmanController@store')->name('save_salesman')->middleware('auth');


////////////////////////////////////// Destroy  ///////////////////////////////////////////////////

Route::get('destroy_area/{id}','AreaController@destroy')->name('destroy_area')->middleware('auth');

Route::get('destroy_city/{id}','CityController@destroy')->name('destroy_city')->middleware('auth');

Route::get('destroy_company/{id}','CompanyController@destroy')->name('destroy_company')->middleware('auth');

Route::get('destroy_customer/{id}','CustomerController@destroy')->name('destroy_customer')->middleware('auth');

Route::get('destroy_product/{id}','ProductController@store')->name('destroy_product')->middleware('auth');

Route::get('destroy_customer_order','CustomerOrderController@destroy')->name('destroy_customer_order')->middleware('auth');

Route::get('destroy_purchase_order','PurchaseOrderController@destroy')->name('destroy_purchase_order')->middleware('auth');

Route::get('destroy_salesman/{id}','SalesmanController@destroy')->name('destroy_salesman')->middleware('auth');

Route::get('destroy_stock/{id}','StockController@destroy')->name('destroy_stock')->middleware('auth');

Route::get('destroy_area/{id}','AreaController@destroy')->name('destroy_area')->middleware('auth');



Route::post('update_company','CompanyController@update')->name('update_company')->middleware('auth');

Route::post('update_customer','CustomerController@update')->name('update_customer')->middleware('auth');

Route::post('update_product','ProductController@update')->name('update_product')->middleware('auth');

Route::post('update_customer_order','CustomerOrderController@update')->name('update_customer_order')->middleware('auth');

Route::post('update_purchase_order','PurchaseOrderController@update')->name('update_purchase_order')->middleware('auth');

Route::post('update_salesman','SalesmanController@update')->name('update_salesman')->middleware('auth');

Route::post('update_stock','StockController@update')->name('update_stock')->middleware('auth');


//////////////////////////////////////// update  //////////////////////////////////////////////////

Route::get('update_view_company',function(){
    return view("layouts.company.update_company");
})->name('update_view_company')->middleware('auth');

Route::get('update_view_customer',function(){
    return view("layouts.customer.update_customer");
})->name('update_view_customer')->middleware('auth');

Route::get('update_view_product',function(){
    return view("layouts.products.update_product");
})->name('update_view_product')->middleware('auth');

Route::get('update_view_customer_order',function(){
    return view("layouts.orders.update_customer_order");
})->name('update_view_customer_order')->middleware('auth');

Route::get('update_view_purchase_order',function(){
    return view("layouts.orders.update_company_order");
})->name('update_view_purchase_order')->middleware('auth');

Route::get('update_view_salesman',function(){
    return view("layouts.saleman.update_saleman");
})->name('update_view_salesman')->middleware('auth');

Route::get('update_view_stock',function(){
    return view("layouts.stock.update_stock");
})->name('update_view_stock')->middleware('auth');



////////////////////////////////////// Search  ///////////////////////////////////////////////////
Route::get('search_area','AreaController@search')->name('search_area')->middleware('auth');

Route::get('search_city','CityController@search')->name('search_city')->middleware('auth');

Route::get('search_customer','CustomerController@search')->name('search_customer')->middleware('auth');

Route::get('search_product','ProductController@search')->name('search_product');

Route::get('search_type_cus','CustomerTypoController@search')->name('search_type_cus')->middleware('auth');

Route::get('search_productN','ProductController@search_name')->name('search_productN')->middleware('auth');

Route::get('search_batch','StockController@search')->name('search_batch')->middleware('auth');

Route::get('search_company','CompanyController@search')->name('search_company')->middleware('auth');

Route::get('search_company_o','CompanyController@search_o')->name('search_company_o')->middleware('auth');

Route::get('search_salesman','SalesmanController@search')->name('search_salesman')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

