<?php
	
	$link = mysqli_connect("50.62.209.4:3306","msuarin","mNs9834@#","exampledb");

  if (mysqli_connect_error())
  {
	  die("Could not connect to database yoyoy");
  }
  
  //$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
  
  $query = "UPDATE `users` SET `name`='Bethany' WHERE name='Beth'";
  
  mysqli_query($link, $query);
  
  $query = "SELECT * FROM users";
  if($result=mysqli_query($link, $query))
  {
	  $row=mysqli_fetch_array($result);
	  print_r($row);
  }
  else
  {
	  echo "it failed!";
  }
  
?>