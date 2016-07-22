<?php


class WorkExperiencesController extends \BaseController
{
	public function index()
	{        
   $work_experiences = WorkExperience::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Work Experiences List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.work-experience.index')->with('title', 'Work Experience List')->with('breadcrumb', $breadCrumb)->with("work_experienes",$work_experiences);		
 }

function add(){
  if (Request::isMethod('post')) {
    $rules = array(
      'title'=>'Required',
      'description'=>'Required'
      );

    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {

      $work_experience = new WorkExperience;
      $work_experience->title = Input::get("title");
      $work_experience->description =Input::get("description");
      $work_experience->save();
      
      $msgs = array("type" => "alert alert-success",
        "msg" => "The Record Have Been  Successfully Added!");

      return Redirect::route('admin-work-experiences')->with("msgs", $msgs);
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
      'title'=>'Add Work Experience',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.work-experience.add')->with('title', 'Add Work Experience')->with('breadcrumb', $breadCrumb);
 }
}
 public function update($id){
  $work_experience = WorkExperience::findOrFail($id);
  
  if (Request::isMethod('post')) {
    $rules = array(
      'title'=>'Required',
      'description'=>'Required'
      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
     $work_experience->title = Input::get("title");
     $work_experience->description = Input::get("description");
     $work_experience->save();
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-work-experiences')->with("msgs", $msgs);
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
      'title'=>'Work Experiences Update',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-update-work-experiences'
      )
    );     
  return View::make('backend.work-experience.update')->with('title', 'Work Experience Update')->with('breadcrumb', $breadCrumb)->with("work_experience", $work_experience);    
}
}
function delete($id){
  $work_experience = WorkExperience::findOrFail($id);
  $work_experience->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-work-experiences')->with("msgs", $msgs);
}
}