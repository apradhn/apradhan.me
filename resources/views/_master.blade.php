<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'Abhijit Pradhan')</title>
		<meta charset="utf-8">
		<meta name="description" content="Abhijit Pradhan: Web Design &amp; Front End Development">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Google Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified Bootstrap CSS --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Font Awesome icons --> 
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
		@yield('head')
	</head>

	<body>
		<div class="container-fluid">
			<div class="row masthead">
				<div class="col-md-6 col-md-offset-1">
					<h1 class="name"><a href="/">Abhijit Pradhan</a></h1>
					<h2 class="city">Chicago, IL</h2>
					<h2 class="job">web design <br>&amp; front-end development</h2>
					<!-- <p><a class="email" href="mailto:abhijit@apradhan.me">abhijit@apradhan.me</a></p> -->
				</div>
				
				<div class="col-md-4 menu">
					<div class="icons">
						<a href="/work"><i class="fa fa-briefcase fa-3x"></i></a>
						<a href="/education"><i class="fa fa-graduation-cap fa-3x"></i></a>
						<a href="/apps"><i class="fa fa-laptop fa-3x"></i></a>
					</div>
					<div class="menu-links">
						<h3><a href="/work">Work</a></h3>
						<h3><a href="/education">Education</a></h3>
						<h3><a href="/apps">Apps</a></h3>
					</div>
				</div>
				
			</div>
			@yield('content')
		</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>		
	</body>
</html>