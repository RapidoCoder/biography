<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*----------------Admin portion-------------------------------------*/
Route::group(array('prefix' => 'admin'), function () {
	Route::get('',array('before'=>'admin-login','as' => 'admin-login-form', 'uses'=>'AdminController@index'));
	Route::get('dashboard',array('before'=>'admin-not-login','as' => 'admin-dashboard', 'uses'=>'AdminController@dashboard'));
	Route::post('authenticate',array('as' => 'admin-authenticate', 'uses'=>'AdminController@adminAuthentication'));
	Route::get('admin-logout',array('before'=>'admin-not-login','as' => 'admin-logout', 'uses'=>'AdminController@logout')); 
  /******************************user route***************************************/
  Route::get('user',array('before'=>'admin-not-login','as' => 'admin-user', 'uses'=>'UsersController@index'));
  Route::any('user/update/{id}',array('before'=>'admin-not-login','as' => 'admin-user-update', 'uses'=>'UsersController@update'))
  ->where('id', '[0-9]+'); 
   /******************************Education route***************************************/
  Route::get('educations',array('before'=>'admin-not-login','as' => 'admin-educations', 'uses'=>'EducationsController@index'));
  Route::any('educations/add',array('before'=>'admin-not-login','as' => 'admin-add-education', 'uses'=>'EducationsController@add'));
  Route::get('educations/delete/{id}',array('before'=>'admin-not-login','as' => 'admin-education-delete', 'uses'=>'EducationsController@delete'))
  ->where('id', '[0-9]+');
  Route::any('educations/update/{id}',array('before'=>'admin-not-login','as' => 'admin-education-update', 'uses'=>'EducationsController@update'))
  ->where('id', '[0-9]+'); 
});





