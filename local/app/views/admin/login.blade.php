<!DOCTYPE html>

<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Car Delux Administration System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); }}
	{{ HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css'); }}
	{{ HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); }}
	{{ HTML::style('assets/global/plugins/bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('assets/global/plugins/uniform/css/uniform.default.css'); }}

	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	{{ HTML::style('assets/global/plugins/select2/select2.css'); }}
	{{ HTML::style('assets/admin/pages/css/login3.css'); }}
	
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	{{ HTML::style('assets/global/css/components.css'); }}
	{{ HTML::style('assets/global/css/plugins.css'); }}
	{{ HTML::style('assets/admin/layout/css/layout.css'); }}
	{{ HTML::style('assets/admin/layout/css/themes/darkblue.css'); }}
	{{ HTML::style('assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css'); }}
	<!-- END THEME STYLES -->
	{{ HTML::style('favicon.ico'); }}
	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<a href="#">
			<img src="assets/media/image/logo2.png" alt=""/>
		</a>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	<div class="menu-toggler sidebar-toggler">
	</div>
	<!-- END SIDEBAR TOGGLER BUTTON -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- Display Messages-->
		@if(Session::has('auth_error'))
		<div class="alert alert-danger authentication_error" role="alert">
			<p class="text-center"> {{Session::get('auth_error')}} </p>
		</div>
		@endif
		@if ($errors->any())
		<div class="alert alert-danger" role="alert">
			{{ implode('', $errors->all('<p class="text-center">:message</p>')) }}
		</div>
		@endif
		<!-- BEGIN LOGIN FORM -->
		{{ Form::open(array('route' => 'admin-authenticate', 'class'=>'login-form')) }}
		
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				Enter any username and password. </span>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				</label>
				<button type="submit" class="btn green-haze pull-right">
					Login <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>



		</form>
		<!-- END LOGIN FORM -->
		<!-- BEGIN FORGOT PASSWORD FORM -->

	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2016 &copy; Cardelux.
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->


	{{HTML::script('assets/global/plugins/jquery.min.js');}}
	{{HTML::script('assets/global/plugins/jquery-migrate.min.js');}}
	{{HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js');}}
	{{HTML::script('assets/global/plugins/jquery.blockui.min.js');}}
	{{HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js');}}
	{{HTML::script('assets/global/plugins/jquery.cokie.min.js');}}
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	{{HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');}}
	{{HTML::script('assets/global/plugins/select2/select2.min.js');}}

	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	{{HTML::script('assets/global/scripts/metronic.js');}}
	{{HTML::script('assets/admin/layout/scripts/layout.js');}}
	{{HTML::script('assets/admin/layout/scripts/demo.js');}}
	{{HTML::script('assets/admin/pages/scripts/login.js');}}

	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	jQuery(document).ready(function() {
   $(".btn.green-haze.pull-right").click(function(){
     $(".authentication_error").remove();
   })
	  Metronic.init(); // init metronic core components
  	  Layout.init(); // init current layout
      Login.init();
      Demo.init();
    });
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>