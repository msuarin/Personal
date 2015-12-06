<?php

$link = mysqli_connect("50.62.209.4:3306","msuarin","mNs9834@#","exampledb");

  if (mysqli_connect_error())
  {
	  die("Could not connect to database yoyoy");
  }
  
  //$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
  
  
  //$query = "SELECT `name` FROM users WHERE id<4 OR password!=''";
  //$query = "UPDATE `users` SET name='Ian O\'Neil' WHERE id=2 LIMIT 1";
  //mysqli_query($link, $query);
  
  $name="Ian O'Neil";
  $query = "SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link, $name)."'";
  if($result=mysqli_query($link, $query))
  {
	  echo mysqli_num_rows($result);
	  while($row=mysqli_fetch_array($result)){
		  print_r($row);
	  }
  }
  else
  {
	  echo "it failed!";
  }
  
?>