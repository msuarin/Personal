<?php
	
?>

<!doctype html>
<html>
<head>
	 <title>Weather Scraper</title>
	 
	 <meta charset="utf-8" />
	 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
	<style>
		html, body
		{
			height: 100%;
		}
		#topContainer
		{
			background-image: url("images/sunny.jpg");
			width: 100%;
			height: 100%;
			/* background-size: cover will display the whole image. */
			background-size: cover;
			background-position: center;
			padding-top: 200px;
		}
		
		.center {
			text-align: center;
		}
		
		.white
		{
			color: white;
		}
		
		p
		{
			padding-top: 15px;
			padding-bottom: 15px;
		}
		
		button
		{
			margin-top: 20px;
		}
		
		.alert
		{
			margin-top: 20px;
			display: none;
		}
	</style>
	
</head>
<body>
	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="white">Weather Predictor</h1>
				<p class="lead white">Enter your city below to get a forecast for the weather</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />
					</div>
					<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
				</form>
				
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find the weather data for that city. Please try again.</div>
				<div id="noCity" class="alert alert-danger">Please enter a city!</div>
				
			</div>
		</div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<script>
		//giving the function an "event" parameter and calling the preventDefault() function,
		//will prevent the form from submitting and run the code instead.
		$("#findMyWeather").click(function(event) {
			event.preventDefault();
			$(".alert").hide();
			
			if ($("#city").val() != "")
			{
				$.get("scraper.php?city=" + $("#city").val(), function(data) {
					/*As an alternative to forcing the page to display a blank page when a non-existent city is entered in php by using error_reporting(0); , you can search for a warning message like so: 
					if(data.search(/Warning/i) !== -1) {
						$("#danger").html("Invalid Location").fadeIn();
					} else {
						$("#success").html(data).fadeIn();
					}
					*/
					
					
					if(data == "")
					{
						$("#fail").fadeIn();
					}
					else
					{
						$("#success").html(data).fadeIn();
					}
				});
			}
			else
			{
				$("#noCity").fadeIn();
			}
		});
	</script>
</body>
</html>
