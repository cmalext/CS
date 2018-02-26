@extends('auth')
@section('section')
	<h1>Student</h1>
	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/faculty/student') }}">Student List</a></li>
			<li><a href="{{ url('/faculty/student/add')}}">Add</a></li>
			<li><a href="{{ url('/faculty/student/import') }}">Import</a></li>
	</div>
	<div class="first">
		<table class="datatable">
			<thead>
				<tr><th>ID<th>Name<th>Course & Year<th>Option
			</thead>
				@foreach($students as $s)
					<tr><td>{{ $s->username }}<td>{{ $s->lastname.' '.$s->firstname.' '.$s->middlename }}<td>{{ $s->course.'-'.$s->year }}<td><a href=""><i class="fa fa-edit"></i></a> <a href=""><i class="fa fa-lock"></i></a> <a href=""><i class="fa fa-times"></i></a>
				@endforeach
			
		</table>
	</div>
@stop