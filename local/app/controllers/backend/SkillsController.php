<?php


class SkillsController extends \BaseController
{
	public function index()
	{        
   $skills = Skill::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Skills List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-skills'
      )
    );    
   return View::make('backend.skill.index')->with('title', 'Skills List')->with('breadcrumb', $breadCrumb)->with("skills",$skills);		
 }
 public function update($id){
  $skill = Skill::findOrFail($id); 
  if (Request::isMethod('post')) {
    $rules = array(
      'experience_color'=>'Required|not_in:0',
      'title'=>'Required',
      'description'=>'Required',
      'experties_level'=>'Required'
      );

    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
     $skill->title = Input::get("title");
     $skill->description =Input::get("description");
     $skill->experties_level = Input::get("experties_level");
     $skill->experience_color = Input::get("experience_color");
     $skill->save();

     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-skills')->with("msgs", $msgs);
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
      'title'=>'Skills List',
      'homeIcon'=>false,
      'rightSide'=>true,
      'url'=>'admin-skills'
      ),
    array(
      'title'=>'Skills Update',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );   
  return View::make('backend.skill.update')->with('title', 'Skill Update')->with('breadcrumb', $breadCrumb)->with("skill", $skill);    
}
}
function add(){
  if (Request::isMethod('post')) {
    $rules = array(
      'experience_color'=>'Required|not_in:0',
      'title'=>'Required',
      'description'=>'Required',
      'experties_level'=>'Required'
      );

    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
      $skill = new Skill;
      $skill->title = Input::get("title");
      $skill->description =Input::get("description");
      $skill->experties_level = Input::get("experties_level");
      $skill->experience_color = Input::get("experience_color");
      $skill->save();
      $msgs = array("type" => "alert alert-success",
        "msg" => "The Record Have Been  Successfully Added!");

      return Redirect::route('admin-skills')->with("msgs", $msgs);
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
      'title'=>'Skills List',
      'homeIcon'=>false,
      'rightSide'=>true,
      'url'=>'admin-skills'
      ),
    array(
      'title'=>'Add Skill',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );    
   return View::make('backend.skill.add')->with('title', 'Add Skill')->with('breadcrumb', $breadCrumb);
 }
}
function delete($id){
  $skill = Skill::findOrFail($id);
  $skill->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-skills')->with("msgs", $msgs);
}
}