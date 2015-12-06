<?php

	session_start();
	
	require_once("twitteroauth-master/autoload.php");
	use Abraham\TwitterOAuth\TwitterOAuth;
	
	$apikey="6F3GwNjQviz02ID8T4xrj82tL";
	$apisecret="mDNGBDHLoKK4hpB3RJsMpOYPnbCC05Vpj4fonyqiNGTC5LA0Cn";
	$accesstoken="187309892-vyM7KpX5JmmauWyrfVe6V1a7LJnpoKunfwXEYbDg";
	$accesssecret="mIjGo3fbbtQJPdfYVl4LJGGD6x5YaX9hadSDjmNyCPNez";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	$tweets = $connection->get("statuses/user_timeline", array("screen_name" => "marknicco", "count" => "2"));
	
	print_r($tweets);

?>
