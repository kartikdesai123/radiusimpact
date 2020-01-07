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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode1 = Artisan::call('route:clear');
    $exitCode2 = Artisan::call('config:clear');
    $exitCode3 = Artisan::call('view:clear');
    return '<h1>cache route config view cleared</h1>';
});

//testing email
Route::match(['get', 'post'], 'testingmail', ['as' => 'testingmail', 'uses' => 'frontend\DashboardController@testingmail']);

//createpassword
Route::match(['get', 'post'], 'createpassword', ['as' => 'createpassword', 'uses' => 'frontend\DashboardController@createPassword']);

//Dashboard
Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'frontend\DashboardController@dashboard']);

//services
Route::match(['get', 'post'], 'services', ['as' => 'services', 'uses' => 'frontend\ServicesController@index']);

//web development
Route::match(['get', 'post'], 'web-development', ['as' => 'web-development', 'uses' => 'frontend\WebdevelopmentController@index']);

//technical support
Route::match(['get', 'post'], 'technical-support', ['as' => 'technical-support', 'uses' => 'frontend\TechnicalsuppoertController@index']);

//cloud backup
Route::match(['get', 'post'], 'cloud-backup', ['as' => 'cloud-backup', 'uses' => 'frontend\CloudbackupController@index']);

//portfolio
Route::match(['get', 'post'], 'portfolio', ['as' => 'portfolio', 'uses' => 'frontend\portfolioController@index']);

//contact
Route::match(['get', 'post'], 'contact', ['as' => 'contact', 'uses' => 'frontend\contactController@index']);