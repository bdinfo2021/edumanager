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
Route::get('/sign-up/demo',[
    'uses'=>'DemoRegistrationController@index',
    'as'=>'/sign-up'
]);
Route::post('/customer/add',[
    'uses'=>'DemoRegistrationController@addCustomer',
    'as'=>'/add-new-customer'
]);
Route::get('/customer/confirmation-message',[
    'uses'=>'DemoRegistrationController@message',
    'as'=>'/confirmation-message'
]);
