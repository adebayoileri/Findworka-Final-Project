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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'Pagescontroller@about');
Route::get('/contact', 'Pagescontroller@contact');
Route::get('/privacy-policy', 'Pagescontroller@policy');
Route::get('/terms', 'Pagescontroller@terms');
Route::get('/webdevelopment', 'Pagescontroller@web');
Route::get('/datascience', 'Pagescontroller@datascience');
Route::get('/uiux', 'Pagescontroller@uiux');
Route::get('/mobileappdevelopment', 'Pagescontroller@mobile');
Route::resource('admin','AdminController');
Route::resource('program','ProgramController');
Route::resource('privilege', 'PrivilegeController');
Route::resource('payment_status', 'PaymentStatusController');
Route::resource('/user', 'UserController');
//Admin Routes

    Route::get('new-admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('new-admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');;
    Route::get('/admin-dashboard', 'AdminDashboardController@dashboard');
