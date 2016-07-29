<?php


class FrontendController extends \BaseController
{
	public function index()
	{ 
    $data = array();       
    $user = User::first();
    $educations = Education::with('achievments')->orderBy('id', 'DESC')->get();
    $skills = Skill::orderBy('id', 'DESC')->get();
    $work_experiences = WOrkExperience::orderBy('id', 'DESC')->get();
    $portfolios_categories = PortfolioCategory::with('portfolios')->orderBy('id', 'DESC')->get();

    $data['user'] = $user;
    $data['educations'] = $educations;
    $data["experiences"] = $work_experiences;
    $data["portfolios_categories"] = $portfolios_categories;
    return View::make('template.frontend')->with('data', $data);		
 }

}