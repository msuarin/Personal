<?php
	//mysqli_connect("50.62.209.4:3306", "msuarin", "mNs9834@#", "exampledb");
	$link = mysqli_connect("50.62.209.4:3306","msuarin","mNs9834@#","exampledb");
// Check connection
// if (!$con)
  // {
  // die(mysqli_connect_error());
  // }
  // if ($con)
  // {
  // echo "working!";
  // }
  //echo mysqli_connect_error();
  if (mysqli_connect_error())
  {
	  die("Could not connect to database yoyoy");
  }
  
  
  
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