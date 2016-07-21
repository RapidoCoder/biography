@extends('../../template.backend')

@section('content')
@if ($errors->any())
<div class="alert alert-danger" role="alert">
  {{ implode('', $errors->all('<p class="text-center">:message</p>')) }}
</div>
@endif

<div class="row">
	<div class="col-md-10 col-md-offset-1">

		<div class="portlet box green ">
      <div class="portlet-title">
       <div class="caption">
        <i class="fa fa-gift"></i> Add Education
      </div>
      <div class="tools">
        <a href="" class="collapse" data-original-title="" title="">
        </a>
        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
        </a>
        <a href="" class="reload" data-original-title="" title="">
        </a>
        <a href="" class="remove" data-original-title="" title="">
        </a>
      </div>
    </div>
    <div class="portlet-body form">
      <form class="form-horizontal" role="form" method="POST"action="{{ URL::route('admin-education-update', $education->id)}}">
        <div class="form-body">
         <div class="form-group">
          <label class="col-md-3 control-label">Title</label>
          <div class="col-md-9">
           <input type="text" required name="title" class="form-control" value="{{$education->title}}">

         </div>
       </div>
       <div class="form-group">
        <label class="col-md-3 control-label">Start Year</label>
        <div class="col-md-9">
         <input type="number"  required name="start_year" class="form-control" value="{{DateTime::createFromFormat('Y-m-d H:i:s', $education->start_year)->format('Y')}}">

       </div>
     </div>
     <div class="form-group">
      <label class="col-md-3 control-label">End Year</label>
      <div class="col-md-9">
       <input type="number" required  name="end_year" class="form-control" value="{{DateTime::createFromFormat('Y-m-d H:i:s', $education->end_year)->format('Y')}}">

     </div>
   </div>
   <div class="form-group">
    <label class="col-md-3 control-label">University</label>
    <div class="col-md-9">
     <input type="text"  required  name="university" class="form-control"  value="{{$education->university}}">

   </div>
 </div>
 <div class="form-group">
  <label class="col-md-3 control-label">Achievments Title</label>
  <div class="col-md-9">
    <input type="text"  required  name="achievments_title" class="form-control"  value="{{$education->achievements_title}}">

 </div>
</div>
{{-- */$first=true;/* --}}

@foreach($achievments as $achievment)

<div class="form-group">
  <label class="col-md-3 control-label">Achievment</label>
  <div class="col-md-8">
   <input type="text"  required  name="achievment[]" class="form-control"  value="{{$achievment->description}}">
   
 </div>
 @if($first)
 {{-- */$first=false;/* --}}
 <div>
  <span class="glyphicon glyphicon-plus add-btn" aria-hidden="true"></span>
</div>
@else
<div>
  <span class="glyphicon glyphicon-minus minus-btn" aria-hidden="true"></span>
</div>
@endIf

</div>
@endForeach

<div class="dynamic-fields-container">
</div>
<div class="form-group">
 <div class="row">
  <div class="col-md-offset-3 col-md-9">
   <button type="submit" class="btn green">Update</button>

 </div>
</div>
</div>
</form>
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


$(".add-btn").click(function(){
  $(".dynamic-fields-container").append('<div class="form-group"> <label class="col-md-3 control-label">Achievment</label> <div class="col-md-8"> <input type="text" required name="achievment[]" class="form-control" placeholder="Enter Achievment Title"> </div> <div> <span class="glyphicon glyphicon-minus minus-btn" aria-hidden="true"></span> </div> </div>');
});

$(".green").on('click', '.minus-btn', function() {   
  $(this).closest(".form-group").remove();
});
});
</script>
@stop

