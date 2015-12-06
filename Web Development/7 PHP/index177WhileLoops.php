<?php
	
	$i = 0;
	
	$array=array("apple", "banana", "grape");
	
	while ($array[$i])
	{
		echo "Key: ".$i." Value: ".$array[$i]."<br />";
		$i++;
	}
	
	foreach($array as $key => $value)
	{
		echo "Key: ".$key." Value: ".$value."<br />";
	}
	
	
		
?>