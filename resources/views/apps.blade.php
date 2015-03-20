@extends('_master')

@section('title')
	Abhijit Pradhan | Apps
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/apps.css') }}">
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
				<h3 class="heading"><a href="/work">Work</a></h3>
			</div>
			<div class="menu-cell">
				<h3 class="heading"><a href="/education">Education</a></h3>
			</div>
			<div class="menu-cell">
				<h3 class="heading"><a class="active" href="/apps">Apps</a></h3>
			</div>
		</div>
	</div>
@stop

@section('content')
	<div class="row feature">
		<div class="col-md-9 col-md-offset-1">
			<div class="heading feature-heading">Apps</div>	
		</div>
	</div>

	<div class="row feature-main apps">
		<div class="col-md-4 col-md-offset-1">
			<div class="subheading">
				Minimal Pokédex
			</div>
			<div class="subheading-secondary">
				Pokémon Data Visualizations with AJAX powered search.
			</div>
			<div class="app-links">
				<div class="link-panel">
					<i class="fa fa-link fa-2x circle"></i>
					<a href="http://pokedex.apradhan.me/">View</a>
				</div>
				<div class="link-panel">
					<i class="fa fa-github-alt fa-2x circle"></i>
					<a href="https://github.com/apradhn/pokedex">View on Github</a>
				</div>				
			</div>					
		</div>

		<div class="col-md-4">
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
	</div>	

@stop