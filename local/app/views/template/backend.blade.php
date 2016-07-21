<!DOCTYPE html>
<html lang="en">
   <!-- BEGIN HEAD -->
   <head>
      <meta charset="utf-8"/>
      <title>Biography Administration System</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta content="" name="description"/>
      <meta content="" name="author"/>
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME STYLES -->
      {{HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');}}
      {{HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css');}}
      {{HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');}}
      {{HTML::style('assets/global/plugins/bootstrap/css/bootstrap.min.css');}}
      {{HTML::style('assets/global/plugins/uniform/css/uniform.default.css');}}
      {{HTML::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');}}
      {{HTML::style('assets/global/plugins/select2/select2.css');}}
      {{HTML::style('assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css');}}
      {{HTML::style('assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css');}}
      {{HTML::style('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css');}}
      {{HTML::style('assets/global/css/components.css');}}
      {{HTML::style('assets/global/css/plugins.css');}}
      {{HTML::style('assets/admin/layout/css/layout.css');}}
      {{HTML::style('assets/admin/layout/css/themes/darkblue.css');}}
      {{HTML::style('assets/admin/layout/css/custom.css');}}
      {{HTML::style('assets/global/plugins/bootstrap-summernote/summernote.css');}}
      {{HTML::style('assets/global/plugins/icheck/skins/all.css');}}
      {{HTML::script('assets/global/plugins/jquery.min.js');}}
      {{HTML::script('assets/global/plugins/jquery-migrate.min.js');}}
      {{HTML::script('assets/global/plugins/jquery-ui/jquery-ui.min.js');}}
      {{HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js');}}
      {{HTML::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');}}
      {{HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');}}
      {{HTML::script('assets/global/plugins/jquery.blockui.min.js');}}
      {{HTML::script('assets/global/plugins/jquery.cokie.min.js');}}
      {{HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js');}}
      {{HTML::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');}}
      {{HTML::script('assets/global/plugins/select2/select2.min.js');}}
      {{HTML::script('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js');}}
      {{HTML::script('assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js');}}
      {{HTML::script('assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js');}}
      {{HTML::script('assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js');}}
      {{HTML::script('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js');}}
      {{HTML::script('assets/global/scripts/metronic.js');}}
      {{HTML::script('assets/admin/layout/scripts/layout.js');}}
      {{HTML::script('assets/admin/layout/scripts/quick-sidebar.js');}}
      {{HTML::script('assets/admin/layout/scripts/demo.js');}}
      {{HTML::script('assets/admin/pages/scripts/table-managed.js');}}
      {{HTML::script('assets/admin/layout/scripts/moment.js');}}
      {{HTML::script('assets/admin/layout/scripts/bootstrap-datetimepicker.js');}}
      {{HTML::script('assets/global/plugins/bootstrap-summernote/summernote.min.js');}}
      {{HTML::script('assets/global/plugins/icheck/icheck.min.js');}}
   </head>
   <body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
      <!-- BEGIN HEADER -->
      <div class="page-header -i navbar navbar-fixed-top">
         <!-- BEGIN HEADER INNER -->
         <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
               <a href="{{URL::route('admin-dashboard')}}">
               <img src="{{asset('assets/media/image/logo1.png')}}" alt="logo" class="logo-default"/>
               </a>
               <div class="menu-toggler sidebar-toggler">
               </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <div class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
               <ul class="nav navbar-nav pull-right">
                  <li class="dropdown dropdown-user">
                     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                     <img alt="" class="img-circle" src="{{asset('assets/admin/layout/img/avatar.png');}}"/>
                     <span class="username username-hide-on-mobile">
                     @if(Auth::admin()->check()) 
                     {{Auth::admin()->get()->username}}
                     @endIf
                     </span>
                     <i class="fa fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                           @if(Auth::admin()->check()) 
                           <a href="{{ URL::route('admin-logout'); }}"><i class="icon-key"></i> Log Out </a>
                           @endIf
                        </li>
                     </ul>
                  </li>
                  <!-- END QUICK SIDEBAR TOGGLER -->
               </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
         </div>
         <!-- END HEADER INNER -->
      </div>
      <!-- END HEADER -->
      <div class="clearfix"></div>
      <!-- BEGIN CONTAINER -->
      <div class="page-container">
         <!-- BEGIN SIDEBAR -->
         <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU1 -->
            <ul class="page-sidebar-menu hidden-sm hidden-xs" data-auto-scroll="true" data-slide-speed="200">
               <li>
                  <a href="javascript:;">
                  <i class="fa fa-clock-o"></i>
                  <span class="title">
                  User Profile</span>
                  <span class="arrow ">
                  </span>
                  </a>
                  <ul class="sub-menu">
                     <li>
                        <a href="{{URL::route('admin-user')}}">
                        Manage User Profile</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <!-- END SIDEBAR MENU1 -->
            <!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
            <ul class="page-sidebar-menu visible-sm visible-xs" data-slide-speed="200" data-auto-scroll="true">
               <li>
                  <a href="javascript:;">
                  <i class="fa fa-clock-o"></i>
                  <span class="title">
                  User Profile</span>
                  <span class="arrow ">
                  </span>
                  </a>
                  <ul class="sub-menu">
                     <li>
                        <a href="{{URL::route('admin-user')}}">
                        Manage User Profile</a>
                     </li>
                  </ul>
               </li>
            </ul>
            </li>
            <!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
         </div>
         <!-- END SIDEBAR -->
         <!-- BEGIN CONTENT -->
         <div class="page-content-wrapper">
            <div class="page-content">
               <h3 class="page-title">
                  {{ $title }}
               </h3>
               <div class="page-bar">
                  <ul class="page-breadcrumb">
                     @foreach($breadcrumb as $breadcrumbElement)
                     <li>
                        @if($breadcrumbElement['homeIcon'])
                        <i class="fa fa-home"></i>
                        @endIf
                        @if($breadcrumbElement['rightSide'] != false)
                        {{HTML::linkRoute($breadcrumbElement['url'],$breadcrumbElement['title'] )}}
                        @else
                        {{HTML::link("#",$breadcrumbElement['title'] )}}
                        @endIf
                        @if($breadcrumbElement['rightSide'])
                        <i class="fa fa-angle-right"></i>
                        @endIf
                     </li>
                     @endForeach
                  </ul>
               </div>
               <!-- Page Content Goes Here -->
               @yield('content')
               <!-- End Of Page Content-->
               <div class="clearfix"></div>
               <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
               <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                           <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                           Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn blue">Save changes</button>
                           <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </div>
         </div>
      </div>
      </div>
      </div>
      <div class="page-footer">
         <div class="page-footer-inner">
            {{date("Y");}} &copy; Dr Rehman Ali.
         </div>
         <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
         </div>
      </div>
      <!-- END JAVASCRIPTS -->
   </body>
   <!-- END BODY -->
</html>
