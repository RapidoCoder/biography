@extends('../../template.backend')
@section('content')
@if ($errors->any())
<div class="alert alert-danger" role="alert">
 {{ implode('', $errors->all('
 <p class="text-center">:message</p>
 ')) }}
</div>
@endif
@if(Session::has('msgs'))
<div class="{{Session::get('msgs')['type']}}" role="alert">

  <p class="text-center">{{Session::get('msgs')['msg']}}</p>
</div>
@endif
<div class="portlet box green">
 <div class="portlet-title">
  <div class="caption">
   <i class="fa fa-gift"></i>User Profile
 </div>
 <div class="tools">
   <a href="javascript:;" class="collapse" data-original-title="" title="">
   </a>
   <a href="javascript:;" class="reload" data-original-title="" title="">
   </a>
 </div>
</div>
<div class="portlet-body form booking-view">
  <!-- BEGIN FORM-->
  <form action="#" class="form-horizontal form-row-sepe booking-view">
   <div class="form-body">

    <div class="form-group">
     <label class=" col-md-3">Name</label>
     <div class="col-md-4">

       <label class=" col-md-12 text-left">{{$user->name}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Email</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->email}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Phone No</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->phone}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Title</label>
     <div class="col-md-9 text-left">

       <label class=" col-md-12 text-left">{{$user->title}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">address</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->address}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">About Me</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->about_me}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Summary</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->summary}}</label>
     </div>
   </div>
   <div class="form-group">
    <label class=" col-md-3">Image</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{HTML::image("assets/media/image/".$user->image)}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Website Url</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$user->website}}</label>
     </div>
   </div>
   <div class="form-group">
     <div class="col-md-2 col-md-offset-10">
       <label class=" col-md-12 text-left"><a href="{{URL::route('admin-user-update', $user->id)}}" class="btn btn-success" role="button">Update</a></label>
     </div>
   </div>
 </div>
</div>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
TableManaged.init();
});
</script>
@stop