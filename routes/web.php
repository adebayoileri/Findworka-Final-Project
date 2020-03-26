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

// use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes(['verify'=> true]);
Auth::routes();

Route::get('/home', 'UserDashBoardController@index');
// Route::get('/assignments', 'AssignmentController@index')->middleware('verifyRole');
Route::resource('/submissions', 'SubmissionController');
Route::get('/submissions/{id}/edit', 'SubmissionController@edit')->middleware('verifyRole');
Route::get('/submissions/{id}/download', 'FileDownloadsController@submissiondownload')->middleware('verifyRole');
//Static pages ::get
Route::get('/about', 'Pagescontroller@about');
Route::get('/contact', 'Pagescontroller@contact');
Route::get('/privacy-policy', 'Pagescontroller@policy');
Route::get('/terms', 'Pagescontroller@terms');
Route::get('/courses/all', 'PagesController@courses');
Route::get('/webdevelopment', 'Pagescontroller@web');
Route::get('/datascience', 'Pagescontroller@datascience');
Route::get('/uiux', 'Pagescontroller@uiux');
Route::get('/mobileappdevelopment', 'Pagescontroller@mobile');
Route::get('/{id}/suspend', 'AdminDashboardController@suspend');
Route::get('/{id}/unsuspend', 'AdminDashboardController@unsuspend');

// Route::get('')
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/purchase/history', 'HomeController@payment_history');
//Resources Routes
Route::resource('profile', 'ProfileController');
Route::resource('tutor', 'TutorController')->middleware('verifyRole');
Route::resource('admin','AdminController');
Route::resource('program','ProgramController')->middleware('verifyRole');
Route::resource('privilege', 'PrivilegeController')->middleware('verifyRole');
Route::resource('payment_status', 'PaymentStatusController')->middleware('verifyRole');
Route::resource('/user', 'UserController')->middleware('verifyRole');
Route::resource('/students', 'StudentController')->middleware('verifyRole');
Route::resource('/curriculum', 'CurriculumController');
Route::get('/assignments', 'AssignmentController@index')->middleware('verifyRole');
Route::get('/assignments/create', 'AssignmentController@create');
Route::post('/assignments/create', 'AssignmentController@store');
Route::get('/assignments/{id}/download', 'FileDownloadsController@assignmentdownload')->middleware('verifyRole');

Route::post('/submissions/create', 'SubmissionController@store');
Route::get('/apply/{id}', 'PaymentController@apply');
Route::post('/apply/{id}', 'PaymentController@storeusercourse');

// Social Auth
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');


// Payments Routes
Route::get('stripe', 'PaymentController@index');
Route::post('stripe', 'PaymentController@store');


//Admin Routes
    Route::get('new-admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('new-admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');;
    Route::get('/admin-dashboard', 'AdminDashboardController@dashboard');
