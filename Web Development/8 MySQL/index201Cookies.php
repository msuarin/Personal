<?php
	setcookie("id", "", time()-3600);
	echo $_COOKIE['id'];
?>