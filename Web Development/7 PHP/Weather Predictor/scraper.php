<?php
	//This line is needed to return a blank page instead of an Internal Server Error page
	//We need the blank page so the php call will return an empty string and we can display the
	//error alert div for non-existent cities
	error_reporting(0);
	
	$city = $_GET['city'];
	$city = str_replace(" ", "", $city);
	
	$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	// (.*?) selects the content in between 3 Day and Summary
	//s means multi line check
	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
	echo ($matches[1]);
?>