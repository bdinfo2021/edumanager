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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'/home'
]);
Route::get('/features/all',[
    'uses'=>'FeatureController@index',
    'as'=>'/features'
]);
Route::get('/pricing/all',[
    'uses'=>'PricingController@index',
    'as'=>'/pricing'
]);
Route::get('/download/apps',[
    'uses'=>'CompanyController@downloadApps',
    'as'=>'/download-apps'
]);
Route::get('/about/company',[
    'uses'=>'CompanyController@aboutUs',
    'as'=>'/about-us'
]);
Route::get('/contact-us',[
    'uses'=>'CompanyController@contactUs',
    'as'=>'/contact'
]);
Route::get('/customer/sign-up',[
    'uses'=>'CustomerController@signUp',
    'as'=>'/customer-sign-up'
]);
Route::post('/customer/add',[
    'uses'=>'CustomerController@addCustomer',
    'as'=>'/add-new-customer'
]);
Route::get('/customer/confirmation-message',[
    'uses'=>'CustomerController@message',
    'as'=>'/confirmation-message'
]);
Route::get('/customer/sign-in/new',[
    'uses'=>'CustomerController@signInForm',
    'as'=>'/customer-sign-in-form'
]);
Route::post('/customer/sign-in',[
    'uses'=>'CustomerController@signInCustomer',
    'as'=>'/customer-sign-in'
]);
Route::post('/customer/sign-out',[
    'uses'=>'CustomerController@signOutCustomer',
    'as'=>'/customer-sign-out'
]);
Route::get('/customer-email-check/{email}', [
    'uses'  =>'CustomerController@customerEmailCheck',
    'as'    =>'customer-email-check'
]);
Route::get('/customer/all',[
    'uses'=>'CustomerController@allCustomers',
    'as'=>'/customers'
]);



Route::get('customer/view-customer/{id}',[
    'uses'=>'CustomerController@viewCustomerInfo',
    'as'=>'/view-customer'
]);

Route::get('customer/unpublished/{id}',[
    'uses'=>'CustomerController@unpublishedCustomerInfo',
    'as'=>'unpublished-customer'
]);
Route::get('customer/published/{id}',[
    'uses'=>'CustomerController@publishedCustomerInfo',
    'as'=>'published-customer'
]);
Route::get('customer/customer-details/{id}',[
    'uses'=>'SuperMarketController@customerDetails',
    'as'=>'customer-details'
]);
Route::get('customer/send-mail/{id}',[
    'uses'=>'CustomerController@sendMainToCustomer',
    'as'=>'/send-mail'
]);
Route::post('/customer/mail/send',[
    'uses'=>'CustomerController@saveCustomerMailInfo',
    'as'=>'/save-customer-mail-info'
]);
Route::get('customer/delete/{id}',[
    'uses'=>'CustomerController@deleteCustomer',
    'as'=>'/delete-customer'
]);




