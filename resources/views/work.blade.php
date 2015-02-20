@extends('_master')

@section('title')
	Work | Abhijit Pradhan
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/work.css') }}">
@stop

@section('menu')
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

@section('content')
	<div class="row feature">
		<div class="col-md-1 col-md-offset-1">
			<i class="fa fa-briefcase fa-3x circle"></i>
		</div>
		<div class="col-md-9">
			<div class="heading feature-heading">Work</div>	
		</div>
	</div>
	<div class="row feature-main">
		<div class="col-md-3 col-md-offset-2">
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
				    <li>Custom Web Design</li>
				    <li>Troubleshoot CMS issues via phone and email</li>
				    <li>Domain management</li>
				    <li>Setup Google Analytics</li>
				    <li>Provide SEO advice</li>
				    <li>Resolve billing issues</li>
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
				    <li>Custom Web Design</li>
				    <li>Troubleshoot CMS issues via phone and email</li>
				    <li>Domain management</li>
				    <li>Setup Google Analytics</li>
				    <li>Provide SEO advice</li>
				    <li>Resolve billing issues</li>
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
				    <li>Custom Web Design</li>
				    <li>Troubleshoot CMS issues via phone and email</li>
				    <li>Domain management</li>
				    <li>Setup Google Analytics</li>
				    <li>Provide SEO advice</li>
				    <li>Resolve billing issues</li>
				</ul>			
			</div>
		</div>
	</div>
@stop