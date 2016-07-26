<?php


class ResearchCategoriesController extends \BaseController
{
	public function index()
	{        
   $reseach_categories = ResearchCategory::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Research Categories List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.research-category.index')->with('title', 'Reseach Categories List')->with('breadcrumb', $breadCrumb)->with("reseach_categories",$reseach_categories);		
 }

 function add(){
  if (Request::isMethod('post')) {
    $research_projects = array();
    $rules = array(
      'name'=>'Required'
      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
     $reseach_category = new ResearchCategory;
     $reseach_category->name = Input::get("name");
     $reseach_category->save();
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Added!");

     return Redirect::route('admin-research-categories')->with("msgs", $msgs);
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
      'title'=>'Research Categories List',
      'homeIcon'=>false,
      'rightSide'=>true,
      'url'=>'admin-research-categories'
      ),
    array(
      'title'=>'Add Research Category',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.research-category.add')->with('title', 'Add Work Experience')->with('breadcrumb', $breadCrumb);
 }
}
public function update($id){
  $research_category = ResearchCategory::findOrFail($id); 
  if (Request::isMethod('post')) {
    $rules = array(
      'name'=>'Required'
      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
     $research_category->name = Input::get("name");
     $research_category->save();
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-research-categories')->with("msgs", $msgs);
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
    'title'=>'Research Categories List',
    'homeIcon'=>false,
    'rightSide'=>true,
    'url'=>'admin-research-categories'
    ),
  array(
    'title'=>'Research Category Update',
    'homeIcon'=>false,
    'rightSide'=>false,
    'url'=>'admin-update-research-category'
    )
  );     
 return View::make('backend.research-category.update')->with('title', 'Research Category Update')->with('breadcrumb', $breadCrumb)->with("research_category", $research_category);    
}
}
function delete($id){
  $reseach_category = ResearchCategory::findOrFail($id);
  $reseach_category->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-research-categories')->with("msgs", $msgs);
}
}