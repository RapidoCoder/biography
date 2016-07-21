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
					<i class="fa fa-gift"></i> Update User Profile
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
				<form class="form-horizontal" role="form" method="POST"action="{{ URL::route('admin-user-update', $user->id)}}" enctype="multipart/form-data">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-3 control-label">Name</label>
							<div class="col-md-9">
								<input type="text" name="name" class="form-control" value="{{$user->name}}">

							</div>
						</div>
            <div class="form-group">
              <label class="col-md-3 control-label">Title</label>
              <div class="col-md-9">
                <input type="text" name="title" class="form-control" value="{{$user->title}}">

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Email</label>
              <div class="col-md-9">
                <input type="email" name="email" class="form-control" value="{{$user->email}}">

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Phone</label>
              <div class="col-md-9">
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Image</label>
              <div class="col-md-9">
                {{ Form::file('image','',array('class'=>'form-control')) }}

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Address</label>
              <div class="col-md-9">
                <input type="text" name="address" class="form-control" value="{{$user->address}}">

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Website</label>
              <div class="col-md-9">
                <input type="text" name="website" class="form-control" value="{{$user->website}}">

              </div>
            </div>
            <div class="form-group">
             <label class="col-md-3 control-label">About Me</label>
             <div class="col-md-9">
              <textarea  name="about_me" class="form-control" >{{$user->about_me}}</textarea>

            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Summary</label>
            <div class="col-md-9">
              <textarea  name="summary" class="form-control" >{{$user->summary}}</textarea>

            </div>
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
});
</script>
@stop

