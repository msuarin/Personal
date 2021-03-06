<?php
	session_start();
	include("connection.php");
	
	$query = "SELECT diary FROM `users` WHERE id='".$_SESSION['id']."' LIMIT 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$diary = $row['diary'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.navbar-brand
		{
			font-size: 1.8em;
		}
		
		#topContainer
		{
			background-image: url("images/day-dream.jpg");
			width: 100%;
			/* background-size: cover will display the whole image. */
			background-size: cover;
		}
		#topRow
		{
			margin-top: 80px;
			text-align: center;
		}
		
		#topRow h1
		{
			font-size: 300%;
		}
		
		.bold
		{
			font-weight: bold;
		}
		
		.marginTop
		{
			margin-top: 30px;
		}
		
		.center
		{
			text-align: center;
		}
		
		.title
		{
			margin-top: 100px;
			font-size: 300%;
		}
		
		#footer
		{
			background-color: #B0D1FB;
			padding-top: 70px;
			width: 100%;
		}
		
		.marginBottom
		{
			margin-bottom: 30px;
		}
		
		.appstoreImage
		{
			width: 250px;
		}
	</style>
  </head>
  <body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header pull-left">
				<a href="" class="navbar-brand">Secret Diary</a>
			</div>
			<div class="pull-right">
				<ul class="navbar-nav nav">
					<!--"?logout=1" will set the GET variable "logout" equal to 1. This will be used 
					to destroy the session variable and display a message that they are logged out-->
					<li><a href="index.php?logout=1">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<textarea class="form-control"><?php echo $diary; ?></textarea>
			</div>
		</div>
	</div>

	
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<script>
		//min-height css attribute will set the height of the element as its minimum height but if the //content is taller it will increase the height above minimum
		$(".contentContainer").css("min-height", $(window).height());
		
		$("textarea").css("height", $(window).height()-110);
		$("textarea").keyup(function() {
			$.post("updatediary.php", {diary:$("textarea").val()});
		});
	</script>
	
  </body>
</html>