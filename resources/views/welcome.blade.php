@extends ('_master')

@section ('title')
	Abhiijt Pradhan
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@stop

@section('menu')
	<div class="col-md-4 menu">
		<div class="menu-col">
			<div class="menu-cell">
				<a href="/work"><i class="fa fa-briefcase fa-3x"></i></a>
			</div>
			<div class="menu-cell">
				<a href="/education"><i class="fa fa-graduation-cap fa-3x"></i></a>
			</div>
			<div class="menu-cell">
				<a href="/apps"><i class="fa fa-laptop fa-3x"></i></a>
			</div>
		</div>
		<div class="menu-col menu-links">
			<div class="menu-cell">
				<h3><a href="/work">Work</a></h3>
			</div>
			<div class="menu-cell">
				<h3><a href="/education">Education</a></h3>
			</div>
			<div class="menu-cell">
				<h3><a href="/apps">Apps</a></h3>
			</div>
		</div>
	</div>
@stop

@section ('content')
	<div class="row feature">
		<div class="col-md-5 col-md-offset-1 col-sm-8 profile">
			<p>
			Enterprising and collaborative web professional available for freelance Web Design, and seeking long-term employment in Front-End Web Development.
			</p>
		</div>
	</div>
@stop
	