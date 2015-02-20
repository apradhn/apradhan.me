@extends ('_master')

@section ('title')
	Abhiijt Pradhan
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@stop

@section ('content')
<div class="row feature">
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
	