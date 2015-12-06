<?php

//connection string verification
$link = mysqli_connect("50.62.209.4:3306","msuarin","mNs9834@#","exampledb");
if (mysqli_connect_error())
{
	die("Could not connect to database");
}

?>