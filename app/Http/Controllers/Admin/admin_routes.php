<?php

Route::get('panel', [
	'as' => 'admin-dashboard',
	'uses' => "Admin\Dashboard\IndexController@index"
]);

Route::get('/', [
    'as' => 'admin-login',
    'uses' => "Admin\Auth\IndexController@login"
]);

Route::post('login', [
    'as' => 'admin-login',
    'uses' => "Admin\Auth\IndexController@loginProceed"
]);

Route::get('registration', [
    'as' => 'admin-registration',
    'uses' => "Admin\Auth\IndexController@registration"
]);

Route::post('registration', [
    'as' => 'admin-registration-proceed',
    'uses' => "Admin\Auth\IndexController@registrationProceed"
]);