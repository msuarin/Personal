<?php

	session_start();
	if ($_GET["logout"]==1 AND $_SESSION['id'])
	{
		session_destroy();
		$message = "You have been logged out. Have a nice day!";
		session_start();
	}
	
	include("connection.php");
	
	if ($_POST['submit']=="Sign Up")
	{
		if(!$_POST['email'])
		{
			$error.="<br />Please enter your email address";
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$error.="Please enter a valid email address";
		}
			
		
		if(!$_POST['password'])
		{
			$error.="<br />Please enter your password";
		}
		else
		{
			if (strlen($_POST['password']) < 8)
			{
				$error.="<br />Please enter a password with at least 8 characters";
			}
			//This will check if there is at least 1 capital letter in the password
			if(!preg_match('`[A-Z]`', $_POST['password']))
			{
				$error.="<br />Please include at least one capital letter in your password.";
			}
		}
		
		if ($error)
		{
			$error = "There were error(s) in your signup details: ".$error;
		}
		else
		{
			//Query that returns records that match the inputted email address
			$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			
			$result = mysqli_query($link, $query);
			
			//checks if there are any rows that matched
			$results = mysqli_num_rows($result);
			
			//If there are rows that matched then you get a message that the email is already registered
			//Otherwise it puts your information in the database and creates your account.
			if($results)
			{
				$error = "That email address is already registered. Do you want to log in?";
			}
			else
			{
				$query="INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo "You've been signed up!";
				
				$_SESSION['id']=mysqli_insert_id($link);
				
				//Redirect to logged in page
				header("Location:mainpage.php");
			}
		}
	}
	
	if ($_POST['submit']=="Log In")
	{
		if(!$_POST['loginemail'])
		{
			$error.="<br />Please enter your email address";
		}
		
		if(!$_POST['loginpassword'])
		{
			$error.="<br />Please enter your password";
		}
		
		if ($error)
		{
			$error = "There were error(s) in your login details: ".$error;
		}
		else
		{
			//Query that matches the email inputted to the one in the database
			$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
			
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_array($result);
			
			if($row) 
			{
				$_SESSION['id'] = $row['id'];
				
				//Redirect to logged in page
				header("Location:mainpage.php");
			}
			else
			{
				$error = "We could not find a user with that email and password. Please try again.";
			}
		}
	}

?>