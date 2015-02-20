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
					<h1 class="name">Abhijit Pradhan</h1>
					<h2 class="city">Chicago, IL</h2>
					<h2 class="job">web design <br>&amp; front-end development</h2>
					<!-- <p><a class="email" href="mailto:abhijit@apradhan.me">abhijit@apradhan.me</a></p> -->
				</div>
				
				@yield('menu')
				
			</div>
			@yield('content')
		</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>		
	</body>
</html>