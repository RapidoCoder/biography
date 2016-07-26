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
    $categories = ['0' => 'Please Select Category'] + PortfolioCategory::lists('title', 'id');
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
        $portfolio->image = $imageName;
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
        'title'=>'PortFolios List',
        'homeIcon'=>false,
        'rightSide'=>true,
        'url'=>'admin-port-folio'
        )
      ,
      array(
        'title'=>'Add Portfolio',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-user'
        )
      );    
     return View::make('backend.port-folio.add')->with('title', 'Add Portfolio')->with('breadcrumb', $breadCrumb)->with("categories", $categories);
   }
 }
 public function update($id){
  $portfolio = PortFolio::findOrFail($id);
  $categories = ['0' => 'Please Select Category'] + PortfolioCategory::lists('title', 'id');
  if (Request::isMethod('post')) {
    $rules = array(
      'portfolio_category_id'=>'Required|not_in:0',
      'title'=>'Required',
      'description'=>'Required'

      );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {


      $portfolio->portfolio_category_id = Input::get("portfolio_category_id");
      $portfolio->title = Input::get("title");
      $portfolio->description = Input::get("description");
      if (Input::hasFile('image')) {
        if ( file_exists(public_path() . '/assets/media/portfolio-images/' . $portfolio->image) ) {
          File::delete(public_path() . '/assets/media/portfolio-images/' . $portfolio->image);
        }
        $image = Input::file('image');
        $destinationPath =  public_path() .'/assets/media/portfolio-images/';
        $imageName = time() . "_" . $image->getClientOriginalName();
        $upload_success = $image->move($destinationPath, $imageName);

        if ($upload_success) {
          Image::make($destinationPath . $imageName)->save($destinationPath . $imageName);
        }
        $portfolio->image = $imageName;
      }

      $portfolio->save();

      $msgs = array("type" => "alert alert-success",
        "msg" => "The Record Have Been  Successfully Updated!");

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
        'title'=>'PortFolios List',
        'homeIcon'=>false,
        'rightSide'=>true,
        'url'=>'admin-port-folio'
        ),
      array(
        'title'=>'Portfolio Update',
        'homeIcon'=>false,
        'rightSide'=>false,
        'url'=>'admin-user'
        )
      );    
    return View::make('backend.port-folio.update')->with('title', 'Portfolio Update')->with('breadcrumb', $breadCrumb)->with("categories",$categories)->with("portfolio", $portfolio);    
  }
}
function delete($id){
  $portfolio = PortFolio::findOrFail($id);
  if ( file_exists(public_path() . '/assets/media/portfolio-images/' . $portfolio->image) ) {
    File::delete(public_path() . '/assets/media/portfolio-images/' . $portfolio->image);
  }
  $portfolio->delete();
  $msgs = array("type" => "alert alert-danger",
    "msg" => "The Record Have Been  Successfully Deleted!");

  return Redirect::route('admin-port-folio')->with("msgs", $msgs);
}
}