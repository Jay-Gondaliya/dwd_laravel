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
    Route::any('/admin', 'AdminController@adminIndex')->name('admin.index');
    Route::any('/admin/checkLogin', 'AdminController@adminCheckLogin')->name('admin.checkLogin');
    Route::any('/forgot-password', 'AdminController@forgotPassword')->name('forgot-password');
    Route::any('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::any('/voter-add', 'AdminController@voterAdd')->name('voter_add');
    Route::any('/store_voter', 'AdminController@voterStore')->name('store_voter');
    Route::any('edit/voter/{id}', 'AdminController@editVoter')->name('edit_voter');
    Route::any('delete', 'AdminController@voterDelete')->name('delete_voter');
    Route::any('/fileUpload', 'AdminController@fileUpload')->name('fileUpload');
    Route::any('/supervisors-dashboard', 'AdminController@supervisorsDashboard')->name('supervisors-dashboard');
    Route::any('/managers-dashboard', 'AdminController@managersDashboard')->name('managers-dashboard');

    Route::any('/voters-analysis', 'AdminController@votersAnalysis')->name('voters-analysis');
    Route::any('/supervisor-field-volunteers-team', 'AdminController@supervisorVolunteersTeam')->name('supervisorVolunteersTeam');
    Route::any('/reports-graphs', 'AdminController@reportsGraphs')->name('reports-graphs');
    Route::any('/managers-team', 'AdminController@managersTeam')->name('managersTeam');
    Route::any('/managers-supervisor-team', 'AdminController@managersSupervisorTeam')->name('managersSupervisorTeam');

    Route::any('/all-voters', 'AdminController@voterList')->name('voterList');
});
