<html>
<head>
	<title>	{{ (Auth::user()->check())?"Student":"Faculty" }} </title>
	<link href="{{ url()."/dist/css/admin.css" }}" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.datatable').dataTable();
		});
	</script>
</head>
<body>
	<div class="sidenav">
		<div class="logo">
			<a href="{{ url() }}"><img src="{{ url()."/dist/img/hero.png"}}" alt=""></a>
		</div>
		<ul class="sidenav-nav">
			<li {{ ($page == 'index')?'class="active"':'' }}><a href="{{ url() }}"><i class="fa fa-home"></i><small>Dashboard</small></a></li>
			<li {{ ($page == 'student')?'class="active"':'' }}><a href="{{ url()."/faculty/student" }}"><i class="fa fa-group"></i><small>Student</small></a></li>
			<li {{ ($page == 'faculty')?'class="active"':'' }}><a href=""><i class="fa fa-group"></i><small>Faculty</small></a></li>
			<li {{ ($page == 'index')?'class="active"':'' }}><a href=""><i class="fa fa-home"></i><small></small></a></li>
			<li {{ ($page == 'index')?'class="active"':'' }}><a href=""><i class="fa fa-home"></i><small>Dashboard</small></a></li>
		</ul>
	</div>
	<div class="row">
		<div class="inner">
			@if($page == 'student')
				
			@else
				@yield('section')
			@endif
		</div>
	</div>
</body>
</html>