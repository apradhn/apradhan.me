@extends('_master')

@section('title')
	Abhijit Pradhan | Education
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/education.css') }}">
@stop

@section('content')
	<div class="row feature">
		<div class="col-md-1 col-md-offset-1">
			<i class="fa fa-graduation-cap fa-3x circle"></i>
		</div>
		<div class="col-md-9">
			<div class="heading feature-heading">Education</div>	
		</div>
	</div>
	<div class="row feature-main">
		<div class="col-md-4 col-md-offset-2">
			<div class="subheading">
				Macalester College
			</div>
			<div class="subheading-secondary">
				Bachelor of Arts, English Literature
			</div>
			<div class="location">
				Saint Paul, MN (2011)
			</div>			
		</div>

		<div class="col-md-4">
			<div class="subheading">
				Harvard Extension School
			</div>
			<div class="subheading-secondary">
				Web Technologies Certificate
			</div>
			<div class="location">
				Cambridge, MA (Fall '15)
			</div>		
		</div>

		<div class="col-md-4 col-md-offset-2">
			<div class="subheading">
				University of Iowa
			</div>
			<div class="location">
				Iowa City, IA (2007-09)
			</div>						
		</div>
	</div>	

	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<div class="feature-main awards">
				<div class="heading">
					Awards
				</div>
				<div class="subheading">
					University of Iowa Dean's List
				</div>
				<div class="subheading-secondary">
					Spring '08
				</div>	
				<div class="subheading">
					University of Iowa Dean's List
				</div>
				<div class="subheading-secondary">
					Fall '08
				</div>	
			</div>			
		</div>	
	</div>	

@stop	