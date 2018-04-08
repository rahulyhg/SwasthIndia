<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');


Route::get('user-prescription', 'Prescription\PrescriptionController@create')->name('user.prescription');
Route::post('user-prescription-save', 'Prescription\PrescriptionController@store')->name('frontend.prescription.store');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        Route::post('doctor', 'DoctorController@register')->name('doctor.register');
        Route::get('register/doctor', 'DoctorController@create')->name('doctor.register.get');
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        /*
         * Test Specific
         */
        Route::get('test', 'TestController@index')->name('test');
        Route::get('test/create', 'TestController@create')->name('test.create');
        Route::post('test/create', 'TestController@store')->name('test.store');

        Route::get('test-record', 'TestRecordController@index')->name('test_record');
        Route::get('test-record/create', 'TestRecordController@create')->name('test_record.create');
        Route::post('test-record/create', 'TestRecordController@store')->name('test_record.store');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
        Route::patch('blood-group/update', 'ProfileController@updateBloodGroup')->name('blood-group.update');
        Route::patch('allergy/update', 'ProfileController@updateAllergies')->name('allergy.update');
    });
    Route::group(['namespace' => 'Doctor', 'as' => 'user.', 'middleware' => 'doctor'], function () {
        Route::post('patient/send/otp', 'DoctorController@sendOtp')->name('send.otp');
    });
});
