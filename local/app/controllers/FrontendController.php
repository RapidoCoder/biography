<?php


class FrontendController extends \BaseController
{
	public function index()
	{ 
    $data = array();       

    $data['user'] = User::first();
    $data['educations'] = Education::with('achievments')->orderBy('id', 'DESC')->get();
    $data["experiences"] = WorkExperience::orderBy('id', 'DESC')->get();
    $data["portfolios_categories"] = PortfolioCategory::with('portfolios')->orderBy('id', 'DESC')->get();
    $data['skills'] = Skill::orderBy('id', 'DESC')->get();
    $data['research_categories'] = ResearchCategory::with('researchProjects')->orderBy('id', 'DESC')->get();;
    return View::make('template.frontend')->with('data', $data);		
  }

  public function contactMe(){
    if (Request::isMethod('post')) {
      $rules = array(
        'name'=>'Required',
        'email'=>'Required',
        'message'=>'Required'
        );

      $validator = Validator::make(Input::all(), $rules);
      if ($validator->passes()) {
        $contactus = new ContactUs;
        $contactus->name = Input::get("name");
        $contactus->email = Input::get("email");
        $contactus->message = Input::get("message");
        $contactus->save();
        $msgs = array("type" => "alert alert-success",
          "msg" => "The Message Have Been Successfully Submited");

        return Redirect::route('home')->with("msgs", $msgs);
      }else{
       return Redirect::back()->withErrors($validator->errors());
     }
   }
 }
 public function hireMe(){
  if (Request::isMethod('post')) {
    $rules = array(
      'name'=>'Required',
      'email'=>'Required',
      'message'=>'Required',
      'file'=>'Required'
      );

    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes()) {
      $file_name = "";
      if (Input::hasFile('file')) {
        $file = Input::file('file');
        $destinationPath =  public_path() .'/assets/media/cvs/';
        $file_name = time() . "_" . $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $file_name);
      }
      $hire_me = new HireMe;
      $hire_me->name = Input::get("name");
      $hire_me->email = Input::get("email");
      $hire_me->message = Input::get("message");
      $hire_me->file = $file_name;
      $hire_me->save();
      $msgs = array("type" => "alert alert-success",
        "msg" => "The Message Have Been Successfully Submited");

      return Redirect::route('home')->with("msgs", $msgs);
    }else{
     return Redirect::back()->withErrors($validator->errors());
   }
 }
}

}