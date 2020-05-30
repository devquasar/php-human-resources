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

Route::get('/', 'HomeController@index')->name('home');

// Авторизация
Route::get('/signup', 'AuthController@getSignup')
        ->middleware('guest')
        ->name('auth.signup');
Route::post('/signup', 'AuthController@postSignup')
        ->middleware('guest');
Route::get('/signin', 'AuthController@getSignin')
        ->middleware('guest')
        ->name('auth.signin');
Route::post('/signin', 'AuthController@postSignin')
        ->middleware('guest');
Route::get('/signout', 'AuthController@getSignout')
        ->name('auth.signout');

//Поиск
Route::get('/search', 'SearchController@getResults')
        ->name('search.results');

//Профили
Route::get('/personnel/all', 'ProfileController@allProfiles')
        ->middleware('auth')
        ->name('profile.all');

Route::get('/personnel/all/create', 'ProfileController@createProfiles')
        ->middleware('auth')
        ->name('profile.create');
Route::post('/personnel/all/create', 'ProfileController@createProfilesSubmit')
        ->middleware('auth')
        ->name('profile.create.submit');

Route::get('/personnel/{id}/edit', 'ProfileController@editProfile')
        ->middleware('auth')
        ->name('profile.edit');
        
Route::post('/personnel/{id}/edit', 'ProfileController@editProfileSubmit')
        ->middleware('auth')
        ->name('profile.edit.submit');

Route::get('/user/{id}/edit', 'ProfileController@editUser')
        ->middleware('auth')
        ->name('user.edit');
        
Route::post('/user/{id}/edit', 'ProfileController@editUserSubmit')
        ->middleware('auth')
        ->name('user.edit.submit');





