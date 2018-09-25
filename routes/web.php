<?php

Route::get('/', 'HomeController@index');
Route::get('/careers', 'HomeController@careers');
Route::get('/support', 'HomeController@support');
Route::get('/all_service', 'HomeController@all_service');
Route::get('/tutorial', 'HomeController@tutorial');
Route::get('/signup', 'HomeController@signup');
Route::get('/signin', 'HomeController@signin');
// user routes //

Route::post('/user/register', 'User\AuthController@registration_submit');

Route::get('/user/login', 'User\AuthController@login');
Route::post('/user/login', 'User\AuthController@login_submit');

Route::group(['middleware' => 'admin_user'], function () {

	Route::get('/user/dashboard', 'User\UserController@index')->name('user_dasboard');

	Route::get('/user/edit-profile', 'User\UserController@edit_profile');
	Route::post('/user/edit-profile', 'User\UserController@edit_profile_submit');
	Route::get('/user/change-password', 'User\UserController@change_password');
	Route::post('/user/change-password', 'User\AuthController@change_password_submit');

	Route::get('/user/software-list', 'User\UserController@software_list');

	Route::post('/user/logout', 'User\AuthController@logout');
});

Route::get('/master', 'Master\MasterController@signin');
Route::post('/master/login', 'Master\MasterController@login_submit');
	
Route::group(['middleware' => 'master_user'], function () {

	Route::get('/master/dashboard', 'Master\MasterController@index');
	Route::get('/master/service-list', 'Master\MasterController@service_list');

	// Tutorial
	Route::get('/master/tutorial-list', 'Master\MasterController@tutorial_list');
	Route::get('/master/create-tutorial', 'Master\MasterController@create_tutorial');
	Route::post('/master/create-tutorial', 'Master\MasterController@create_tutorial_submit');
	Route::get('/master/tutorial-edit/{id}', 'Master\MasterController@tutorial_edit');
	Route::post('/master/tutorial_update', 'Master\MasterController@tutorial_edit_submit');
	Route::get('/master/tutorial-delete/{id}', 'Master\MasterController@tutorial_delete');

	Route::get('/master/user-list', 'Master\MasterController@user_list');
	Route::get('/master/user-view/{id}', 'Master\MasterController@user_view');
	Route::get('/master/user_status/{id}/{status}', 'Master\MasterController@user_status');
	Route::post('/master/logout', 'Master\MasterController@logout');

});