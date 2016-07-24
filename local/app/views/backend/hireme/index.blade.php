@extends('../../template.backend')

@section('content')
@if(Session::has('msgs'))
<div class="{{Session::get('msgs')['type']}}" role="alert">

  <p class="text-center">{{Session::get('msgs')['msg']}}</p>
</div>
@endif

<div class="row">
	<div class="col-md-12">


		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Hire Me List
				</div>
				<div class="tools">
					<a href="javascript:;" class="reload" data-original-title="" title="">
					</a>
					<a href="javascript:;" class="remove" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body">
     <table class="table table-striped table-bordered table-hover" id="sample_2">
       <thead>
        <tr>
         <th>
          Id
        </th>
        <th>
          Name
        </th>
        <th>
          Email
        </th>
        <th>
          Message
        </th>
        <th>
          Options
        </th>

      </tr>
    </thead>
    <tbody>
      @foreach($hires_me as $hireme)
      <tr>
       <td>
        {{$hireme->id}}
      </td>
      <td>
        {{$hireme->name}}
      </td>
      <td>
        {{$hireme->email}}
      </td>
      <td>
        {{Helper::limitText($hireme->message,70) }}
      </td>
      <td>
        <a href="{{URL::to('/').'/assets/media/cvs/'.$hireme->file}}" target="_blank"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a> {{ HTML::linkRoute("admin-hire-me-view","" ,array("id"=> $hireme->id ),array("class"=>"glyphicon glyphicon-eye-open","aria-hidden"=>"true","style"=>"padding:0 5px 0 5px;"))}} <a href="{{URL::route('admin-hire-me-delete', $hireme->id)}}" class="glyphicon glyphicon-trash" aria-hidden="true" onclick="return confirm('Are you sure to delete the record?')" ></a>
      </td>
    </tr>
    @endForeach
    
  </tbody>
</table>
</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

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

