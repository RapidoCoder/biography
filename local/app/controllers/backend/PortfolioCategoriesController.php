<?php


class PortfolioCategoriesController extends \BaseController
{
	public function index()
	{        
    $portfolio_categories = PortfolioCategory::orderBy('id', 'DESC')->get(); 
    $breadCrumb = array(
      array(
        'title'=>'control panel',
        'homeIcon'=>true,
        'rightSide'=>true,
        'url'=>'admin-dashboard'
        ),
      array(
        'title'=>'Portfolio Categories List',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-educations'
        )
      );    
    return View::make('backend.portfolio-category.index')->with('title', 'Portfolio Categories List')->with('breadcrumb', $breadCrumb)->with("portfolio_categories",$portfolio_categories);		
  }

  function add(){
    if (Request::isMethod('post')) {
     $rules = array(
      'title'=>'Required'

      );

     $validator = Validator::make(Input::all(), $rules);
     if ($validator->passes()) {
      $portfolio_category = new PortfolioCategory;
      $portfolio_category->title = Input::get("title");
      $portfolio_category->save();
      $msgs = array("type" => "alert alert-success",
        "msg" => "The Record Have Been  Successfully Added!");

      return Redirect::route('admin-portfolio-categories')->with("msgs", $msgs);
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
      'title'=>'Add Portfolio Category',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );    
   return View::make('backend.portfolio-category.add')->with('title', 'Add Portfolio Category')->with('breadcrumb', $breadCrumb);
 }
}
public function update($id){
  $portfolio_category = PortfolioCategory::findOrFail($id); 
  if (Request::isMethod('post')) {
    $rules = array(
      'title'=>'Required'

      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {

     $portfolio_category->title = Input::get("title");
     $portfolio_category->save();
     $msgs = array("type" => "alert alert-success",
      "msg" => "The Record Have Been  Successfully Updated!");

     return Redirect::route('admin-portfolio-categories')->with("msgs", $msgs);
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
      'title'=>'Update Portfolio Category',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );
  return View::make('backend.portfolio-category.update')->with('title', 'Portfolio Category Update')->with('breadcrumb', $breadCrumb)->with("portfolio_category", $portfolio_category);    
}
}
function delete($id){
  $portfolioCategory = PortfolioCategory::findOrFail($id);
  $portfolioCategory->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-portfolio-categories')->with("msgs", $msgs);
}
}