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

Auth::routes(['verify'=> true]);

Route::get('/home', 'UserDashBoardController@index');
// Route::get('/assignments', 'AssignmentController@index')->middleware('verifyRole');
Route::resource('/submissions', 'SubmissionController');
Route::get('/submissions/{id}/download', 'FileDownloadsController@submissiondownload');
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
Route::get('/suspend', 'PagesController@suspend');
// Route::get('')

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
Route::get('/assignments/{id}/download', 'FileDownloadsController@assignmentdownload');

Route::post('/submissions/create', 'SubmissionController@store');
Route::get('/apply/{id}', 'ProfileController@apply');
Route::post('/apply/{id}', 'ProfileController@storeusercourse');

// Social Auth
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('stripe', 'PaymentController@index');
Route::post('stripe', 'PaymentController@store');
//Admin Routes
    Route::get('new-admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('new-admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');;
    Route::get('/admin-dashboard', 'AdminDashboardController@dashboard');
