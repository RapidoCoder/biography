<?php


class EducationsController extends \BaseController
{
	public function index()
	{        
   $educations = Education::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Educations List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-educations'
      )
    );    
   return View::make('backend.education.index')->with('title', 'Educations List')->with('breadcrumb', $breadCrumb)->with("educations",$educations);		
 }
 public function update($id){
  $education = Education::findOrFail($id);
  
  if (Request::isMethod('post')) {
    $rules = array(
      'title'=>'Required',
      'start_year'=>'Required',
      'end_year'=>'Required',
      'university'=>'Required',
      'achievments_title'=>'Required'

      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
     EducationAchievment::where("education_id","=", $id)->delete();
     $education->title = Input::get("title");
     $education->start_year =DateTime::createFromFormat('Y', Input::get("start_year"));
     $education->end_year = DateTime::createFromFormat('Y', Input::get("end_year"));
     $education->university = Input::get("university");
     $education->achievements_title = Input::get("achievments_title");
     $education->save();
     foreach (Input::get("achievment") as $achievment) {
       $achievments[] = array(
        "education_id"=>$education->id,
        "description"=>$achievment
        );
     }
     EducationAchievment::insert($achievments);
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-educations')->with("msgs", $msgs);
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
    $achievments = EducationAchievment::where("education_id","=", $id)->get();  
  return View::make('backend.education.update')->with('title', 'Education Update')->with('breadcrumb', $breadCrumb)->with("education", $education)->with("achievments", $achievments);    
}
}
function add(){
  if (Request::isMethod('post')) {
    $rules = array(
      'title'=>'Required',
      'start_year'=>'Required',
      'end_year'=>'Required',
      'university'=>'Required',
      'achievments_title'=>'Required'
      );

    $validator = Validator::make(Input::all(), $rules);
    $validator->each('achievment', ['required']);
    if ($validator->passes()) {
      $achievments = array();
      $user_id = User::all()->first()->id; 
      $education = new Education;
      $education->user_id = $user_id; 
      $education->title = Input::get("title");
      $education->start_year =DateTime::createFromFormat('Y', Input::get("start_year"));
      $education->end_year = DateTime::createFromFormat('Y', Input::get("end_year"));
      $education->university = Input::get("university");
      $education->achievements_title = Input::get("achievments_title");
      $education->save();
      foreach (Input::get("achievment") as $achievment) {
       $achievments[] = array(
        "education_id"=>$education->id,
        "description"=>$achievment
        );
     }
     EducationAchievment::insert($achievments);
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Added!");

     return Redirect::route('admin-educations')->with("msgs", $msgs);
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
      'title'=>'Add Education',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );    
   return View::make('backend.education.add')->with('title', 'Add Education')->with('breadcrumb', $breadCrumb);
 }
}
function delete($id){
  $education = Education::findOrFail($id);
  $education->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-educations')->with("msgs", $msgs);
}
}