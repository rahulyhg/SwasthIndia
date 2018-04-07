<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('disease', 'DiseaseController');
Route::get('hospital/status/{id}', 'HospitalController@status')->name('hospital.status');
Route::resource('hospital', 'HospitalController');
