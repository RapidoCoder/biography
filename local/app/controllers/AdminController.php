<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('admin.login');
	}
	public function dashboard(){

		$breadCrumb = array(
			array(
				'title'=>'control panel',
				'homeIcon'=>true,
				'rightSide'=>true,
				'url'=>'admin-dashboard'
				),
			array(
				'title'=>'Dashboard',
				'homeIcon'=>false,
				'rightSide'=>false,
				'url'=>'admin-dashboard'
				)
			);
		return View::make('admin.dashboard')->with('title', 'Dashboard')->with('breadcrumb',$breadCrumb);
	}
	public function adminAuthentication(){
		$rules = array(
			'username' => 'Required',
			'password' => 'Required'

			);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes()) {
			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
				);

            // attempt to do the login
			if (Auth::admin()->attempt($userdata,false)) {


				return Redirect::route('admin-dashboard');

			} else {

				return Redirect::back()->with("auth_error", "The Username/Password is not correct");
			}
		} else {
			return Redirect::back()->withErrors($validator->errors());

		}
	}
	public function logout(){
		if (Auth::admin()->check()) {
			Auth::admin()->logout();
		}
		return Redirect::route("admin-login-form");
	}
	public function show(){
		$breadCrumb = array(
			array(
				'title'=>'control panel',
				'homeIcon'=>true,
				'rightSide'=>true,
				'url'=>'admin-dashboard'
				),
			array(
				'title'=>'some title',
				'homeIcon'=>false,
				'rightSide'=>false,
				'url'=>'admin-dashboard'
				)
			);
		return View::make('admin.add')->with('title', 'Dashboard')->with('breadcrumb',$breadCrumb);
	}

}
