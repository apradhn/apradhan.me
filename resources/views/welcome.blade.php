@extends ('_master')

@section ('title')
	Abhiijt Pradhan
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@stop

@section ('menu')
<div class="col-md-4 menu">
	<div class="icons">
		<i class="fa fa-briefcase fa-3x"></i>
		<i class="fa fa-graduation-cap fa-3x"></i>
		<i class="fa fa-laptop fa-3x"></i>
	</div>
	<div class="menu-links">
		<h3><a href="/work">Work</a></h3>
		<h3><a href="/education">Education</a></h3>
		<h3><a href="/apps">Apps</a></h3>
	</div>
</div>
@stop

@section ('content')
<div class="row content">
	<div class="col-md-2 col-md-offset-1">
		<img src="{{ asset('images/headshot.png') }}" alt="Abhijit Pradhan" width="100">
	</div>
	<div class="col-md-5 profile">
		<p>
		Productive and resourceful web professional seeking front-end web development opportunities in Chicago, with experience in Web Design and Customer Service. Quick to learn new 
programming languages and technologies. Enjoys creative problem solving and skilled at clearly communicating technical issues with team members.
		</p>
	</div>
</div>
@stop
	