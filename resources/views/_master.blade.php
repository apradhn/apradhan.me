<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'Abhijit Pradhan')</title>
		<meta charset="utf-8">
		<meta name="description" content="Abhijit Pradhan: Web Design &amp; Front End Development">
		<meta name="keywords" content="Chicago, Web Design, Front End Web Development">
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

				@yield('menu')

			</div>

			@yield('content')

			<div class="col-md-offset-1 footer">
				<a href="mailto:abhijit@apradhan.me">abhijit@apradhan.me</a>
			</div>
			
		</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>		
	    <!-- Google Analytics Tracking Code --> 
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-47620509-2', 'auto');
		  ga('send', 'pageview');

		</script>	    
	</body>
</html>