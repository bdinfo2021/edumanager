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
//    return view('front.home.home-content');
//});

Route::get('/',[
    'uses'=>'CompanyController@index',
    'as'=>'/'
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

//************Manage Client****************//

Route::get('/client/all',[
    'uses'=>'ClientController@allClients',
    'as'=>'/clients'
]);
Route::get('client/view-client/{id}',[
    'uses'=>'ClientController@viewclientInfo',
    'as'=>'/view-client'
]);

Route::get('client/unpublished/{id}',[
    'uses'=>'ClientController@unpublishedCustomerInfo',
    'as'=>'unpublished-customer'
]);
Route::get('client/published/{id}',[
    'uses'=>'ClientController@publishedCustomerInfo',
    'as'=>'published-customer'
]);

Route::get('client/send-mail/{id}',[
    'uses'=>'ClientController@sendMainToClient',
    'as'=>'/send-mail'
]);
Route::post('/client/mail/send',[
    'uses'=>'ClientController@saveClientMailInfo',
    'as'=>'/save-client-mail-info'
]);
Route::get('client/delete/{id}',[
    'uses'=>'ClientController@deleteCustomer',
    'as'=>'/delete-client'
]);

Route::get('/customer/deposit-slip/{id}', [
    'uses'  =>  'ClientController@downloadDepositClip',
    'as'    =>  '/download-deposit-slip'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//************Manage Checkout****************//


Route::get('/customer/shipping/info/{id}', [
    'uses'  =>  'CustomerController@shippingInfo',
    'as'    =>  '/shipping-info'
]);

Route::post('/customer/shipping/info/save', [
    'uses'  =>  'CheckoutController@saveShippingInfo',
    'as'    =>  '/save-shipping-info'
]);

Route::get('/customer/checkout/cancel_url',[
    'uses'=>'CheckoutController@cancelMessage',
    'as'=>'/cancel-url'
]);

Route::get('/customer/checkout/fail_url',[
    'uses'=>'CheckoutController@failMessage',
    'as'=>'/fail-url'
]);

Route::get('/customer/checkout/success_url',[
    'uses'=>'CheckoutController@onlinePaymentResponse',
    'as'=>'/success-url'
]);


Route::get('/customer/checkout/success_notice', function () {
    return view('front.checkout.success-message');
});

