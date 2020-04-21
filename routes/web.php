<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

//accressController
Route::get('/login','accessController@index');
//productController
Route::get('/product-details','productController@detailsindex');
Route::get('/product','productController@productindex');
//dashboardController
Route::get('/dashboard','dashboardController@dashboardindex');

Route::get('/products','dashboardController@productindex');

Route::get('/category','dashboardController@categoryindex');
Route::get('/category-list','dashboardController@categorylistndex');
Route::get('/update-category','dashboardController@updatecategoryindex');

Route::get('/subcategory','dashboardController@subcategoryindex');
Route::get('/subcategory-list','dashboardController@subcategorylist');
Route::get('/update-subcategory','dashboardController@updatesubcategory');

Route::get('/sub-subcategory','dashboardController@subsubcategoryindex');
Route::get('/sub-subcategory-list','dashboardController@dashboardindex');
Route::get('/update-sub-subcategory','dashboardController@sub-subcategory-list');

//Brand
Route::get('/brand','dashboardController@brandindex');
Route::get('/brandlist','dashboardController@brandlist');
Route::get('/updatebrand','dashboardController@updatebrand');
Route::get('/deletebrand','dashboardController@deletebrand');
Route::post('/brandstore','dashboardController@brandstore');

Route::get('/user','dashboardController@userindex');
Route::get('/user-list','dashboardController@dashboardindex');
Route::get('/update-user','dashboardController@dashboardindex');

Route::get('/invoice','dashboardController@invoiceindex');
//paymentController
Route::get('/cart','paymentController@cartindex');
Route::get('/checkout','paymentController@checkoutindex');
//apiController

Route::get('/data','myController@data');
Route::get('/create','myController@create');
Route::get('/update','myController@update');
Route::get('/remove','myController@remove');