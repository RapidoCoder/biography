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
					<i class="fa fa-globe"></i>Educations List
				</div>
				<div class="tools">
					<a href="javascript:;" class="reload" data-original-title="" title="">
					</a>
					<a href="javascript:;" class="remove" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
          <div class="row">
           <div class="col-md-6">
            <div class="btn-group">

             <a href="{{ URL::route('admin-add-education') }}" style="color:white;"><button id="sample_editable_1_new" class="btn green">Add New <i class="fa fa-plus"></i>
             </button></a>
             
             
           </div>
         </div>
         
       </div>
     </div>
     <table class="table table-striped table-bordered table-hover" id="sample_2">
       <thead>
        <tr>
         <th>
          Id
        </th>
        <th>
          title
        </th>
        <th>
          University
        </th>
        <th>
          Start Year
        </th>
        <th>
          End Year
        </th>
        
        <th>
          Options
        </th>

      </tr>
    </thead>
    <tbody>
      @foreach($educations as $education)
      <tr>
       <td>
        {{$education->id}}
      </td>
      <td>
        {{$education->title}}
      </td>
      <td>
        {{$education->university}}
      </td>
      <td>
        {{DateTime::createFromFormat("Y-m-d H:i:s", $education->start_year)->format("Y")}}
      </td>
      <td>
         {{DateTime::createFromFormat("Y-m-d H:i:s", $education->end_year)->format("Y")}}
      </td>
     
      <td>
        {{ HTML::linkRoute("admin-education-update","" ,array("id"=> $education->id ),array("class"=>"glyphicon glyphicon-pencil","aria-hidden"=>"true","style"=>"padding:0 5px 0 5px;"))}}<a href="{{URL::route('admin-education-delete', $education->id)}}" class="glyphicon glyphicon-trash" aria-hidden="true" onclick="return confirm('Are you sure to delete the record?')" ></a>
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

