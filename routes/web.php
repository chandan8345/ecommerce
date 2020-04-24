<?php

use Illuminate\Support\Facades\Route;
//template Links
Route::get('/', function () {
    return view('pages.home');
});

//accressController
Route::get('/login','accessController@index');
//productController
Route::get('/product-details','productController@detailsindex');
Route::get('/product','productController@productindex');

//end template Link
//dashboardController
Route::get('/dashboard','dashboardController@dashboardindex');

//product
Route::get('/product','productController@index');
Route::get('/productlist','productController@productlist');
Route::get('/updateproduct','productController@updateproduct');
Route::get('/deleteproduct','productController@deleteproduct');
Route::post('/productstore','productController@productstore');

//Brand
Route::get('/brand','brandController@index');
Route::get('/brandlist','brandController@brandlist');
Route::get('/updatebrand','brandController@updatebrand');
Route::get('/deletebrand','brandController@deletebrand');
Route::post('/brandstore','brandController@brandstore');

//Category
Route::get('/category','categoryController@index');
Route::get('/categorylist','categoryController@categorylist');
Route::get('/updatecategory','categoryController@updatecategory');
Route::get('/deletecategory','categoryController@deletecategory');
Route::post('/categorystore','categoryController@categorystore');

//SubCategory
Route::get('/subcategory','subcategoryController@index');
Route::get('/subcategorylist','subcategoryController@subcategorylist');
Route::get('/updatesubcategory','subcategoryController@updatesubcategory');
Route::get('/deletesubcategory','subcategoryController@deletesubcategory');
Route::post('/subcategorystore','subcategoryController@subcategorystore');

//Sub_SubCategory
Route::get('/subsubcategory','subsubcategoryController@index');
Route::get('/subsubcategorylist','subsubcategoryController@subsubcategorylist');
Route::get('/updatesubsubcategory','subsubcategoryController@updatesubsubcategory');
Route::get('/deletesubsubcategory','subsubcategoryController@deletesubsubcategory');
Route::post('/subsubcategorystore','subsubcategoryController@subsubcategorystore');

//Users
Route::get('/user','userController@index');
Route::get('/userlist','userController@userlist');
Route::get('/updateuser','userController@updateuser');
Route::get('/deleteuser','userController@deleteuser');
Route::post('/userstore','userController@userstore');

//end Dashboard

Route::get('/invoice','dashboardController@invoiceindex');
//paymentController
Route::get('/cart','paymentController@cartindex');
Route::get('/checkout','paymentController@checkoutindex');