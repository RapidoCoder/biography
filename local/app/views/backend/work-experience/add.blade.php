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
        <i class="fa fa-gift"></i> Add Work Experience
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
     <form class="form-horizontal" role="form" method="POST" action="{{ URL::route('admin-add-work-experience')}}">
      <div class="form-body">
       <div class="form-group">
        <label class="col-md-3 control-label">Title</label>
        <div class="col-md-9">
         <input type="text" name="title" class="form-control" placeholder="Enter text">
         
       </div>
     </div>
     
     <div class="form-group">
      <label class="col-md-3 control-label">Description</label>
      <div class="col-md-9">
       <textarea  name="description" class="form-control" ></textarea>
       
     </div>
   </div>
   
   
   
   <div class="form-group">
     <div class="row">
      <div class="col-md-offset-3 col-md-9">
       <button type="submit" class="btn green">Create</button>
       
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
});


</script>
@stop

