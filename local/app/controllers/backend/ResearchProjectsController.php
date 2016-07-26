<?php


class ResearchProjectsController extends \BaseController
{
	public function index()
	{        
   $research_categories = ResearchCategory::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Research Projects List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.research-projects.index')->with('title', 'Reseach Projects List')->with('breadcrumb', $breadCrumb)->with("research_categories",$research_categories);		
 }

 function add(){
  $categories = ['0' => 'Please Select Category'] + ResearchCategory::lists('name', 'id');
  if (Request::isMethod('post')) {
    $research_projects = array();
    $rules = array(
      'research_category_id'=>'Required|not_in:0'
      );
    $validator = Validator::make(Input::all(), $rules);
    $validator->each('date', ['required']);
    $validator->each('title', ['required']);
    $validator->each('description', ['required']);
    $validator->each('url', ['required']);
    if ($validator->passes()) {   
     foreach (Input::get("title") as $index=>$value) {
       $research_projects[] = array(
        "research_category_id"=>Input::get("research_category_id"),
        "date"=>DateTime::createFromFormat('Y', Input::get("date")[$index]),
        "title"=>$value,
        "description"=>Input::get("description")[$index],
        "url"=>Input::get("url")[$index]
        );
     }
     ResearchProject::insert($research_projects);

     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Added!");

     return Redirect::route('admin-research-projects')->with("msgs", $msgs);
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
      'url'=>'admin-research-projects'
      ),
    array(
      'title'=>'Add Research Project',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-work-experiences'
      )
    );    
   return View::make('backend.research-projects.add')->with('title', 'Add Research Project')->with('breadcrumb', $breadCrumb)->with("categories", $categories);
 }
}
public function update($id){
  $research_category = ResearchCategory::findOrFail($id);
  $categories = ['0' => 'Please Select Category'] + ResearchCategory::lists('name', 'id');
  
  if (Request::isMethod('post')) {
    $research_projects = array(); 
    $rules = array(
      'research_category_id'=>'Required|not_in:0'
      );
    $validator = Validator::make(Input::all(), $rules);
    $validator->each('date', ['required']);
    $validator->each('title', ['required']);
    $validator->each('description', ['required']);
    $validator->each('url', ['required']);
    if ($validator->passes()) {
     foreach (Input::get("title") as $index=>$value) {
       $research_projects[] = array(
        "research_category_id"=>Input::get("research_category_id"),
        "date"=>DateTime::createFromFormat('Y', Input::get("date")[$index]),
        "title"=>$value,
        "description"=>Input::get("description")[$index],
        "url"=>Input::get("url")[$index]
        );
     }
     ResearchProject::where("research_category_id", "=",$research_category->id)->delete();
     ResearchProject::insert($research_projects);
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-research-projects')->with("msgs", $msgs);
   }else{
    return Redirect::back()->withErrors($validator->errors());
  }
}else{
  $research_projects = ResearchProject::where("research_category_id", $id)->get();
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
      'url'=>'admin-research-projects'
      ),
    array(
      'title'=>'Research Project Update',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-update-work-experiences'
      )
    );     
  return View::make('backend.research-projects.update')->with('title', 'Research Project Update')->with('breadcrumb', $breadCrumb)->with("research_category", $research_category)->with("categories", $categories)->with("research_projects", $research_projects);    
}
}

}