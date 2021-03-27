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
Route::get('/login', 'PublicController@login');
Route::get('/signup', 'PublicController@signup');
