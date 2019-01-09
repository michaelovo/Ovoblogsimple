<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>The Michaels Blog |Control Panel</title>
	<meta name="description" content="The michaels Admin Template.">
	<meta name="author" content="Michael ovo">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset("backend/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("backend/css/bootstrap-responsive.min.css")}}" rel="stylesheet">
	<link id="base-style" href="{{asset("backend/css/style.css")}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset("backend/css/style-responsive.css")}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{URL::to("backend/img/favicon.ico")}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
	<!-- end: Favicon -->


  <!-- Scripts -->


</head>

<body>

  <div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Ovoblogsimple</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>









						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Michael ovo
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{ url('homeauth') }}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>

	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ url('index') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="{{URL::to('all_blogs')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> All blogs</span></a></li>
						<li><a href="{{URL::to('pagecreator')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add page</span></a></li>

						<li><a href="{{URL::to('admin')}}"><i class="icon-lock"></i><span class="hidden-tablet"> Logout</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->


			<!-- start: Content -->
			<div id="content" class="span10">
        <ul class="breadcrumb">
  				<li>
  					<i class="icon-home"></i>
  					<a href="{{ url('index') }}">Home</a>
  					<i class="icon-angle-right"></i>
  				</li>
  				<li><a href="{{ url('index') }}">Dashboard</a></li>
  			</ul>
@yield('content')

	<!--footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">All rights reserved</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">The Michaels</a></span>
		</p>

	</footer-->

	<!-- start: JavaScript-->

		<script src="{{asset("backend/js/jquery-1.9.1.min.js")}}"></script>
	<script src="{{asset("backend/js/jquery-migrate-1.0.0.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery-ui-1.10.0.custom.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.ui.touch-punch.js")}}"></script>

		<script src="{{asset("backend/js/modernizr.js")}}"></script>

		<script src="{{asset("backend/js/bootstrap.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.cookie.js")}}"></script>

		<script src='{{asset("backend/js/fullcalendar.min.js")}}'></script>

		<script src='{{asset("backend/js/jquery.dataTables.min.js")}}'></script>

		<script src="{{asset("backend/js/excanvas.js")}}"></script>
	<script src="{{asset("backend/js/jquery.flot.js")}}"></script>
	<script src="{{asset("backend/js/jquery.flot.pie.js")}}"></script>
	<script src="{{asset("backend/js/jquery.flot.stack.js")}}"></script>
	<script src="{{asset("backend/js/jquery.flot.resize.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.chosen.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.uniform.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.cleditor.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.noty.js")}}"></script>

		<script src="{{asset("backend/js/jquery.elfinder.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.raty.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.iphone.toggle.js")}}"></script>

		<script src="{{asset("backend/js/jquery.uploadify-3.1.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.gritter.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.imagesloaded.js")}}"></script>

		<script src="{{asset("backend/js/jquery.masonry.min.js")}}"></script>

		<script src="{{asset("backend/js/jquery.knob.modified.js")}}"></script>

		<script src="{{asset("backend/js/jquery.sparkline.min.js")}}"></script>

		<script src="{{asset("backend/js/counter.js")}}"></script>

		<script src="{{asset("backend/js/retina.js")}}"></script>

		<script src="{{asset("backend/js/custom.js")}}"></script>
    <!-- header toastr link(444) and sweetalert link(445)-->
    <script src ="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js')}}"></script>
    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


	<!-- end: JavaScript-->
<!-- header toastr function -->
  <script>
@if(Session::has('messege'))
	var type="{{Session::get('alert-type','info')}}"
	switch(type){
		case 'info':
			toastr.info("{{Session::get('messege')}}");
			break;
		case 'success':
			toastr.success("{{Session::get('messege')}}");
			break;
		case 'warning':
			toastr.warning("{{Session::get('messege')}}");
			break;
		case 'error':
			toastr.error("{{Session::get('messege')}}");
			break;
	}
	@endif
</script>


<!-- sweetalert function -->

<script>
    $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link =$(this).attr("href");
        swal({
          title:"Are you sure you want to delete?",
          text: "Once Delete, this will be permanently Deleted",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete)=>{
          if (willDelete){
              window.location.href = link;
            }
            else{
              swal("Safe Data!");
            }
          });
        });
</script>
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
