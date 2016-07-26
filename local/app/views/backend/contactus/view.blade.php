@extends('../../template.backend')
@section('content')
@if ($errors->any())
<div class="alert alert-danger" role="alert">
 {{ implode('', $errors->all('
 <p class="text-center">:message</p>
 ')) }}
</div>
@endif
<div class="portlet box green">
 <div class="portlet-title">
  <div class="caption">
   <i class="fa fa-gift"></i>Contact Us
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
    <h4 class="form-section">Details</h4>
    <div class="form-group">
     <label class=" col-md-3">Name</label>
     <div class="col-md-4">

       <label class=" col-md-12 text-left">{{$contactus->name}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Email</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$contactus->email}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Time</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$contactus->time}}</label>
     </div>
   </div>
   <div class="form-group">
     <label class=" col-md-3">Message</label>
     <div class="col-md-9">

       <label class=" col-md-12 text-left">{{$contactus->message}}</label>
     </div>
   </div>

   
   <!-- END FORM-->
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