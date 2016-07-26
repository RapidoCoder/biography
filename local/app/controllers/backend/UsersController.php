<?php


class UsersController extends \BaseController
{
	public function index()
	{        
   $user = User::all()->first(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'User Profile',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );    
   return View::make('backend.user.index')->with('title', 'User Profile')->with('breadcrumb', $breadCrumb)->with("user",$user);		
 }
 public function update($id){
  $user = User::findOrFail($id);
  if (Request::isMethod('post')) {
    $rules = array(
      'name' => 'Required',
      'phone'=>'Required',
      'title'=>'Required',
      'email'=>'Required|email',
      'address'=>'Required',
      'about_me'=>'Required',
      'summary'=>'Required',
      'website'=>'Required'

      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
      $user->name = Input::get("name");
      $user->phone = Input::get("phone");
      $user->title = Input::get("title");
      $user->email = Input::get("email");
      $user->address = Input::get("address");
      $user->about_me = Input::get("about_me");
      $user->summary = Input::get("summary");
      $user->website = Input::get("website");
      if (Input::hasFile('image')) {
        if ( file_exists(public_path() . '/assets/media/image/' . $user->image )) {
            File::delete(public_path() . '/assets/media/image/' . $user->image);
        }
          $image = Input::file('image');
          $destinationPath =  public_path() .'/assets/media/image/';
          $imageName = time() . "_" . $image->getClientOriginalName();
          $upload_success = $image->move($destinationPath, $imageName);

        if ($upload_success) {
          Image::make($destinationPath . $imageName)->save($destinationPath . $imageName);
        }
        $user->image = $imageName;
      }
      $user->save();
      $msgs = array("type" => "alert alert-success",
          "msg" => "The Record Have Been  Successfully Updated!");
        
        return Redirect::route('admin-user')->with("msgs", $msgs);
    }else{
      return Redirect::back()->withErrors($validator->errors());
    }
  }else{
    $breadCrumb = array(
      array(
        'title'=>'control panel',
        'homeIcon'=>true,
        'rightSide'=>true,
        'url'=>'admin-dashboard'
        ),
      array(
        'title'=>'User Profile',
        'homeIcon'=>true,
        'rightSide'=>true,
        'url'=>'admin-user'
        ),
      array(
        'title'=>'User Info Update',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-user'
        )
      );    
    return View::make('backend.user.update')->with('title', 'User Profile Update')->with('breadcrumb', $breadCrumb)->with("user",$user);    
  }
}
}