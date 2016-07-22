@extends('../template.backend')
@section('content')
<div class="row">
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="dashboard-stat blue-madison">
   <div class="visual">
    <i class="fa fa-comments"></i>
  </div>
  <div class="details">
    <div class="number">
    </div>
    <div class="desc">
     User Profile
   </div>
 </div>
 <a class="more" href="{{URL::route('admin-user')}}">
   View User Profile <i class="m-icon-swapright m-icon-white"></i>
 </a>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="dashboard-stat blue-madison">
   <div class="visual">
    <i class="fa fa-comments"></i>
  </div>
  <div class="details">
    <div class="number">
    </div>
    <div class="desc">
     Education
   </div>
 </div>
 <a class="more" href="{{URL::route('admin-educations')}}">
   View Education <i class="m-icon-swapright m-icon-white"></i>
 </a>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="dashboard-stat blue-madison">
   <div class="visual">
    <i class="fa fa-comments"></i>
  </div>
  <div class="details">
    <div class="number">
    </div>
    <div class="desc">
     Work Experience
   </div>
 </div>
 <a class="more" href="{{URL::route('admin-work-experiences')}}">
   View Work Experience <i class="m-icon-swapright m-icon-white"></i>
 </a>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="dashboard-stat blue-madison">
   <div class="visual">
    <i class="fa fa-comments"></i>
  </div>
  <div class="details">
    <div class="number">
    </div>
    <div class="desc">
     Portfolio Category
   </div>
 </div>
 <a class="more" href="{{URL::route('admin-portfolio-categories')}}">
   View Portfolio Categories <i class="m-icon-swapright m-icon-white"></i>
 </a>
</div>
</div>
</div>
<div class="row">
 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="dashboard-stat blue-madison">
   <div class="visual">
    <i class="fa fa-comments"></i>
  </div>
  <div class="details">
    <div class="number">
    </div>
    <div class="desc">
      Portfolios
    </div>
  </div>
  <a class="more" href="{{URL::route('admin-port-folio')}}">
   View Portfolio <i class="m-icon-swapright m-icon-white"></i>
 </a>
</div>
</div>
</div>
<script>
jQuery(document).ready(function() {    
                    Metronic.init(); // init metronic core components
                   Layout.init(); // init current layout
                   QuickSidebar.init(); // init quick sidebar
                   
                 });
</script>
@stop