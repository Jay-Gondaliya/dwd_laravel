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

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::any('/', 'AdminController@index')->name('index');
    Route::any('/checkLogin', 'AdminController@checkLogin')->name('checkLogin');
    Route::any('/forgot-password', 'AdminController@forgotPassword')->name('forgot-password');
    Route::any('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::any('/supervisors-dashboard', 'AdminController@supervisorsDashboard')->name('supervisors-dashboard');
    Route::any('/managers-dashboard', 'AdminController@managersDashboard')->name('managers-dashboard');
});
