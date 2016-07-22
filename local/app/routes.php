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
  /******************************work experience route***************************************/
  Route::get('work_experiences',array('before'=>'admin-not-login','as' => 'admin-work-experiences', 'uses'=>'WorkExperiencesController@index'));
  Route::any('work_experiences/add',array('before'=>'admin-not-login','as' => 'admin-add-work-experience', 'uses'=>'WorkExperiencesController@add'));
  Route::get('work_experiences/delete/{id}',array('before'=>'admin-not-login','as' => 'admin-work-experience-delete', 'uses'=>'WorkExperiencesController@delete'))
  ->where('id', '[0-9]+');
  Route::any('work_experiences/update/{id}',array('before'=>'admin-not-login','as' => 'admin-work-experience-update', 'uses'=>'WorkExperiencesController@update'))
  ->where('id', '[0-9]+');
  /******************************portfolio categories route***************************************/
  Route::get('portfolio-categories',array('before'=>'admin-not-login','as' => 'admin-portfolio-categories', 'uses'=>'PortfolioCategoriesController@index'));
  Route::any('portfolio-category/add',array('before'=>'admin-not-login','as' => 'admin-add-portfolio-category', 'uses'=>'PortfolioCategoriesController@add'));
  Route::get('portfolio-category/delete/{id}',array('before'=>'admin-not-login','as' => 'admin-portfolio-category-delete', 'uses'=>'PortfolioCategoriesController@delete'))
  ->where('id', '[0-9]+');
  Route::any('portfolio-category/update/{id}',array('before'=>'admin-not-login','as' => 'admin-portfolio-category-update', 'uses'=>'PortfolioCategoriesController@update'))
  ->where('id', '[0-9]+'); 
   /******************************portfolio route***************************************/
  Route::get('port_folio',array('before'=>'admin-not-login','as' => 'admin-port-folio', 'uses'=>'PortFoliosController@index'));
  Route::any('port_folio/add',array('before'=>'admin-not-login','as' => 'admin-add-port-folio', 'uses'=>'PortFoliosController@add'));
  Route::get('port_folio/delete/{id}',array('before'=>'admin-not-login','as' => 'admin-port-folio-delete', 'uses'=>'PortFoliosController@delete'))
  ->where('id', '[0-9]+');
  Route::any('port_folio/update/{id}',array('before'=>'admin-not-login','as' => 'admin-port-folio-update', 'uses'=>'PortFoliosController@update'))
  ->where('id', '[0-9]+'); 
});





