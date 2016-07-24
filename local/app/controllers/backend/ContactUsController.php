<?php


class ContactUsController extends \BaseController
{
	public function index()
	{        
   $contactsUs = ContactUs::orderBy('id', 'DESC')->get(); 
   $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Contacts List',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-skills'
      )
    );    
   return View::make('backend.contactus.index')->with('title', 'Contactus List')->with('breadcrumb', $breadCrumb)->with("contactsUs",$contactsUs);		
 }
 public function view($id){
  $contactus = ContactUs::findOrFail($id); 

  $breadCrumb = array(
    array(
      'title'=>'control panel',
      'homeIcon'=>true,
      'rightSide'=>true,
      'url'=>'admin-dashboard'
      ),
    array(
      'title'=>'Contact Us View',
      'homeIcon'=>false,
      'rightSide'=>false,
      'url'=>'admin-user'
      )
    );   
  return View::make('backend.contactus.view')->with('title', 'Contact Us View')->with('breadcrumb', $breadCrumb)->with("contactus", $contactus);    

}

}