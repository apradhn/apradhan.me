@extends('_master')

@section('title')
	Abhijit Pradhan | Apps
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/apps.css') }}">
@stop

@section('menu')
	<div class="col-md-4 menu">
		<div class="icons">
			<a href="/work"><i class="fa fa-briefcase fa-3x"></i></a>
			<a href="/education"><i class="fa fa-graduation-cap fa-3x"></i></a>
			<a href="/apps"><i class="fa fa-laptop fa-3x"></i></a>
		</div>
		<div class="menu-links">
			<h3><a href="/work">Work</a></h3>
			<h3><a href="/education">Education</a></h3>
			<h3><a class="active" href="/apps">Apps</a></h3>
		</div>
	</div>
@stop

@section('content')
	<div class="row feature">
		<div class="col-md-1 col-md-offset-1">
			<i class="fa fa-laptop fa-3x circle"></i>
		</div>
		<div class="col-md-9">
			<div class="heading feature-heading">Apps</div>	
		</div>
	</div>

	<div class="row feature-main apps">
		<div class="col-md-4 col-md-offset-2">
			<div class="subheading">
				TALOS
			</div>
			<div class="subheading-secondary">
				Laundry Organizer
			</div>
			<div class="app-links">
				<div class="link-panel">
					<i class="fa fa-link fa-2x circle"></i>
					<a href="http://p4.apradhan.me/">View</a>
				</div>
				<div class="link-panel">
					<i class="fa fa-github-alt fa-2x circle"></i>
					<a href="https://github.com/apradhn/p4">View on Github</a>
				</div>				
			</div>			
		</div>
		<div class="col-md-4">
			<div class="subheading">
				Developer's Best Friend
			</div>
			<div class="subheading-secondary">
				Placeholder Data Generator
			</div>
			<div class="app-links">
				<div class="link-panel">
					<i class="fa fa-link fa-2x circle"></i>
					<a href="http://p3.apradhan.me/">View</a>
				</div>
				<div class="link-panel">
					<i class="fa fa-github-alt fa-2x circle"></i>
					<a href="https://github.com/apradhn/p3">View on Github</a>
				</div>				
			</div>					
		</div>
	</div>	

@stop