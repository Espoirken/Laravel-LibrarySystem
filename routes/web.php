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

Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard',
]);

Route::get('/attendance', [
    'uses' => 'AttendanceController@index',
    'as' => 'attendance',
]);

Route::get('/transaction', [
    'uses' => 'TransactionController@index',
    'as' => 'transaction',
]);

Route::get('/books', [
    'uses' => 'BookController@index',
    'as' => 'books',
]);

Route::get('/users', [
    'uses' => 'UserController@index',
    'as' => 'users',
]);

Route::get('/settings', [
    'uses' => 'SettingController@index',
    'as' => 'settings',
]);

Route::get('/reports', [
    'uses' => 'ReportController@index',
    'as' => 'reports',
]);


Auth::routes();

