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
					<i class="fa fa-globe"></i>Contact Us List
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
          Email
        </th>
        <th>
          Time
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
      @foreach($contactsUs as $contactus)
      <tr>
       <td>
        {{$contactus->id}}
      </td>
      <td>
        {{$contactus->email}}
      </td>
      <td>
        {{$contactus->time}}
      </td>
      <td>
        {{Helper::limitText($contactus->message,70) }}
      </td>
      <td>
        {{ HTML::linkRoute("admin-contactus-view","" ,array("id"=> $contactus->id ),array("class"=>"glyphicon glyphicon-eye-open","aria-hidden"=>"true","style"=>"padding:0 5px 0 5px;"))}} 
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

