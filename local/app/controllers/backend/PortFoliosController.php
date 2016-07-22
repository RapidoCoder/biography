<?php


class PortFoliosController extends \BaseController
{
	public function index()
	{        
    $port_folios = PortFolio::orderBy('id', 'DESC')->get();
    $breadCrumb = array(
      array(
        'title'=>'control panel',
        'homeIcon'=>true,
        'rightSide'=>true,
        'url'=>'admin-dashboard'
        ),
      array(
        'title'=>'PortFolios List',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-user'
        )
      );    
    return View::make('backend.port-folio.index')->with('title', 'PortFolios List')->with('breadcrumb', $breadCrumb)->with("port_folios",$port_folios);		
  }
  function add(){
    if (Request::isMethod('post')) {
      $rules = array(
        'portfolio_category_id'=>'Required|not_in:0',
        'title'=>'Required',
        'image'=>'Required',
        'description'=>'Required'
        );

      $validator = Validator::make(Input::all(), $rules);
      if ($validator->passes()) {
        $image = Input::file('image');
        $destinationPath =  public_path() .'/assets/media/portfolio-images/';
        $imageName = time() . "_" . $image->getClientOriginalName();
        $upload_success = $image->move($destinationPath, $imageName);

        if ($upload_success) {
          Image::make($destinationPath . $imageName)->save($destinationPath . $imageName);
        }

        $portfolio = new PortFolio;
        $portfolio->portfolio_category_id = Input::get("portfolio_category_id");
        $portfolio->title = Input::get("title");
        $portfolio->description = Input::get("description");
        $portfolio->save();
        $msgs = array("type" => "alert alert-success",
          "msg" => "The Record Have Been  Successfully Added!");

        return Redirect::route('admin-port-folio')->with("msgs", $msgs);
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
        'title'=>'Add Portfolio',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-user'
        )
      );    
     return View::make('backend.portfolio.add')->with('title', 'Add Portfolio')->with('breadcrumb', $breadCrumb);
   }
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
        if ($user->image!="default.gif" && file_exists(public_path() . '/assets/media/image/' . $user->image) ) {
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