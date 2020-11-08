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

use Spatie\Activitylog\Models\Activity;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    return Activity::all();
    return view('welcome');
});


Auth::routes();
Route::get('/UserActivity', 'App\Http\Controllers\LogActivityController@index')->name('index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('user/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::get('user/viewProfile', 'App\Http\Controllers\UserController@viewProfile')->name('user.viewProfile');
Route::post('user/update', 'App\Http\Controllers\UserController@update')->name('user.update');;
