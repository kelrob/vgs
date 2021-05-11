<?php

use Illuminate\Support\Facades\Route;

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

// Public Routes
Route::get('/', 'PublicController@index');
Route::get('/about', 'PublicController@about');
Route::get('/employers', 'PublicController@employers');
Route::get('/signin', 'PublicController@login')->name('signin');
Route::get('/signup', 'PublicController@signup');
Route::get('/forgot-password', 'PublicController@forgotPassword');
Route::post('/signup', 'AuthController@signup');

// Auth Routes
Auth::routes();

// Dashboard Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/build-profile', 'UserController@buildProfile')->name('build-profile');
Route::post('/build-profile-submit', 'UserController@submitBuildProfile')->name('submit-build-profile');
Route::get('/my-cv', 'UserController@myCV');
Route::get('/employer-cv-view/{id}', 'PublicController@employerViewCV');
Route::get('/my-profile', 'UserController@myProfile');
Route::get('/change-password', 'UserController@changePassword');
Route::post('/change-password', 'UserController@updatePassword');
Route::post('/change-avatar', 'UserController@changeAvatar');
Route::get('/edit-work-experience', 'UserController@editWorkExperience');
Route::post('/edit-work-experience', 'UserController@updateWorkExperience');
Route::get('/edit-education', 'UserController@editEducation');
Route::post('/edit-education', 'UserController@updateEducation');
Route::get('/edit-job-preference', 'UserController@editJobPreference');
Route::post('/edit-job-preference', 'UserController@updateJobPrefernce');
Route::post('/subscribe', 'PublicController@subscribeUser');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/login', 'Admin\AuthController@showAdminLoginForm')->name('admin-login');
    Route::post('/login', 'Admin\AuthController@adminLogin');
    Route::get('/users', 'Admin\AdminController@users');
    Route::get('/add-user', 'Admin\AdminController@addUser');
    Route::post('/add-user', 'Admin\AdminController@saveUser');
});
