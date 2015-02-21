@extends('_master')

@section('title')
	Abhijit Pradhan | Work
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/work.css') }}">
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
				<h3 class="heading"><a class="active" href="/work">Work</a></h3>
			</div>
			<div class="menu-cell">
				<h3 class="heading"><a href="/education">Education</a></h3>
			</div>
			<div class="menu-cell">
				<h3 class="heading"><a href="/apps">Apps</a></h3>
			</div>
		</div>
	</div>
@stop

@section('content')
	<div class="row feature">
		<div class="col-md-9 col-md-offset-1">
			<div class="heading feature-heading">Work</div>	
		</div>
	</div>
	<div class="row feature-main">
		<div class="col-md-3 col-md-offset-1">
			<div class="subheading">
				TherapySites
			</div>
			<div class="subheading-secondary">
				Technical Support Specialist
			</div>
			<div class="location">
				Downer's Grove, IL<br>
				March '14 - February '15
			</div>
			<div class="list">
				<ul>
				    <li>Instruct customers on usage of the in-house CMS, via phone and email</li>
				    <li>Custom Web Design for features not available in the supplied templates</li>
				    <li>Troubleshoot editing issues and debug site rendering errors</li>
				    <li>Domain setup assistance, e.g. transfers, requests, DNS records</li>
				    <li>Set up Google Analytics, provide SEO advice</li>
				    <li>Create &amp; cancel subscriptions, update billing with BrainTree payment gateway</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<div class="subheading">
				Computer Explorers
			</div>
			<div class="subheading-secondary">
				Technology Instructor
			</div>
			<div class="location">
				Saint Paul, MN<br>
				June '13 - October '13
			</div>
			<div class="list">
				<ul>
				    <li>Led after-school technology classes for children ages 10-12</li>
				    <li>Courses taught: Google Sketchup, Robotics, Stop-motion animation, Minecraft</li>
				    <li>Domain management</li>
				    <li>Troubleshoot mechanical and software issues as needed</li>
				    <li>Responsible for transportation and setup of class materials</li>
				    <li>Resolve student emergencies e.g., disruptions, bullying, health, and students with special needs</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<div class="subheading">
				Randstad US
			</div>
			<div class="subheading-secondary">
				Operations Processor
			</div>
			<div class="location">
				Bloomington, MN<br>
				May '12 - May '13
			</div>
			<div class="list">
				<ul>
				    <li>Index +5000 documents daily using electronic filing software for Wells Fargo</li>
				    <li>Maintain 99% quality goal sorting legal and lending documents</li>
				    <li>Responsible for learning ~100 documents, updated monthly.</li>
				    <li>Learn new business lines dependent on volume of work.</li>
				    <li>Help train new hirees</li>
				</ul>			
			</div>
		</div>
	</div>
@stop