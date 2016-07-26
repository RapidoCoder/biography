<?php


class HireMeController extends \BaseController
{
	public function index()
	{        
   $hires_me = HireMe::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Hire Me List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-hires-me'
      )
    );    
   return View::make('backend.hireme.index')->with('title', 'Hire Me List')->with('breadcrumb', $breadCrumb)->with("hires_me",$hires_me);		
 }
 public function view($id){
  $hireme = HireMe::findOrFail($id); 

  $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Hire Me List',
      'homeIcon'=>false,
      'rightSide'=>true,
      'url'=>'admin-hire-me'
      ),
    array(
      'title'=>'Hire Me View',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );   
  return View::make('backend.hireme.view')->with('title', 'Hire Me View')->with('breadcrumb', $breadCrumb)->with("hireme", $hireme);    

}
function delete($id){
  $hireme = HireMe::findOrFail($id);
  if (file_exists(public_path() . '/assets/media/cvs/' . $hireme->file) ) {
    File::delete(public_path() . '/assets/media/cvs/' . $hireme->file);
  }
  $hireme->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-hire-me')->with("msgs", $msgs);
} 
}