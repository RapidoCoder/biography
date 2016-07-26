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
					<i class="fa fa-globe"></i>Research Projects Categories List
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

             <a href="{{ URL::route('admin-add-research-project') }}" style="color:white;"><button id="sample_editable_1_new" class="btn green">Add New <i class="fa fa-plus"></i>
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
          Category
        </th>
        
        <th>
          Options
        </th>

      </tr>
    </thead>
    <tbody>
      @foreach($research_categories as $research_category)
      <tr>
       <td>
        {{$research_category->id}}
      </td>
      <td>
        {{$research_category->name}}
      </td>     
      <td>
        {{ HTML::linkRoute("admin-research-project-update","" ,array("id"=> $research_category->id ),array("class"=>"glyphicon glyphicon-pencil","aria-hidden"=>"true","style"=>"padding:0 5px 0 5px;"))}}
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

