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
    Route::any('/user/forgot-password', 'AdminController@userForgotPassword')->name('forgot_password');
    Route::any('/admin', 'AdminController@adminIndex')->name('admin.index');
    Route::any('/admin/forgot', 'AdminController@forgotPasswordAdminView')->name('admin.admin_forgot_password');
    Route::any('/admin/checkLogin', 'AdminController@adminCheckLogin')->name('admin.checkLogin');
    Route::any('/admin/forgot-password', 'AdminController@adminForgotPassword')->name('admin-forgot-password');
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
    Route::any('/download-pdf-voters', 'AdminController@downloadPdfVoters')->name('download_pdf_voters');
    Route::any('/supervisor-field-volunteers-team', 'AdminController@supervisorVolunteersTeam')->name('supervisorVolunteersTeam');
    Route::any('/reports-graphs', 'AdminController@reportsGraphs')->name('reports-graphs');
    Route::any('/managers-team', 'AdminController@managersTeam')->name('managersTeam');
    Route::any('/managers-supervisor-team', 'AdminController@managersSupervisorTeam')->name('managersSupervisorTeam');

    Route::any('/all-voters', 'AdminController@voterList')->name('voterList');

    Route::group(['prefix' => 'state-coordinator'], function () {
        Route::any('list', 'StateCoordinatorController@stateCoordinatorList')->name('admin.state_coordinatorlist');
        Route::any('create', 'StateCoordinatorController@addStateCoordinator')->name('admin.addstate_coordinator');
        Route::any('store', 'StateCoordinatorController@storeStateCoordinator')->name('admin.storestate_coordinator');
        Route::any('edit/{id}', 'StateCoordinatorController@editStateCoordinator')->name('admin.editstate_coordinator');
        Route::any('delete', 'StateCoordinatorController@deleteStateCoordinator')->name('admin.deletestate_coordinator');
    });

    Route::group(['prefix' => 'lga-coordinator'], function () {
        Route::any('list', 'LGACoordinatorController@lgaCoordinatorList')->name('admin.lga_coordinatorlist');
        Route::any('create', 'LGACoordinatorController@addLGACoordinator')->name('admin.addlga_coordinator');
        Route::any('store', 'LGACoordinatorController@storeLGACoordinator')->name('admin.storelga_coordinator');
        Route::any('edit/{id}', 'LGACoordinatorController@editLGACoordinator')->name('admin.editlga_coordinator');
        Route::any('delete', 'LGACoordinatorController@deleteLGACoordinator')->name('admin.deletelga_coordinator');
    });

    Route::group(['prefix' => 'ward-coordinator'], function () {
        Route::any('list', 'WardCoordinatorController@wardCoordinatorList')->name('admin.ward_coordinatorlist');
        Route::any('create', 'WardCoordinatorController@addWardCoordinator')->name('admin.addward_coordinator');
        Route::any('store', 'WardCoordinatorController@storeWardCoordinator')->name('admin.storeward_coordinator');
        Route::any('edit/{id}', 'WardCoordinatorController@editWardCoordinator')->name('admin.editward_coordinator');
        Route::any('delete', 'WardCoordinatorController@deleteWardCoordinator')->name('admin.deleteward_coordinator');

        Route::any('get/records', 'WardCoordinatorController@getRecords')->name('admin.getRecords');
    });

    Route::group(['prefix' => 'cell-coordinator'], function () {
        Route::any('list', 'CellCoordinatorController@cellCoordinatorList')->name('admin.cell_coordinatorlist');
        Route::any('create', 'CellCoordinatorController@addCellCoordinator')->name('admin.addcell_coordinator');
        Route::any('store', 'CellCoordinatorController@storeCellCoordinator')->name('admin.storecell_coordinator');
        Route::any('edit/{id}', 'CellCoordinatorController@editCellCoordinator')->name('admin.editcell_coordinator');
        Route::any('delete', 'CellCoordinatorController@deleteCellCoordinator')->name('admin.deletecell_coordinator');
    });
});
