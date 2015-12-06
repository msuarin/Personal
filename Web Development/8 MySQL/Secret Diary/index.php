<?php
	include("login.php");
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
			margin-top: 100px;
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
			<div class="navbar-header">
				<a href="" class="navbar-brand">Secret Diary</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<form class="navbar-form navbar-right" method="post">
					<div class="form-group">
						<!--addslashes() will escape any characters that the user has in their email or password that could cause errors. Examples would be double quotes, single quotes etc. -->
						<input type="email" name="loginemail" id="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
					</div>
					<div class="form-group">
						<!--addslashes() will escape any characters that the user has in their email or password that could cause errors. Examples would be double quotes, single quotes etc. -->
						<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['loginpassword']); ?>" placeholder="Password" class="form-control" />
					</div>
					<input type="submit" class="btn btn-success" name="submit" value="Log In" />
				</form>
			</div>
		</div>
	</div>
	
	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="marginTop">Secret Diary</h1>
				<p class="lead">Your own private diary, with you wherever you go.</p>
				
				<?php
				
					if($error)
					{
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					}
					
					if($message)
					{
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
					}
				
				?>
				
				<p class="bold marginTop">Interested? Sign Up Below!</p>
				
				<!--Sign Up Form-->
				<form class="marginTop" method="post">
					<!--EMAIL-->
					<div class="form-group">
						<label for="email">Email Address</label>
						<!--addslashes() will escape any characters that the user has in their email or password that could cause errors. Examples would be double quotes, single quotes etc. -->
						<input class="form-control" type="email" placeholder="Your email" name="email" id="email" value="<?php if($error) {echo addslashes($_POST['email']);} ?>" />
					</div>
					<!--PASSWORD-->
					<div class="form-group">
						<label for="password">Password</label>
						<!--addslashes() will escape any characters that the user has in their email or password that could cause errors. Examples would be double quotes, single quotes etc. -->
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php if($error) {echo addslashes($_POST['password']);} ?>" />
					</div>
					<!--SUBMIT BUTTON-->
					<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
				</form>
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
	</script>
	
  </body>
</html>