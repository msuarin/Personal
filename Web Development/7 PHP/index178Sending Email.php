<!doctype html>
<html>
<head>
	 <title>My First Website</title>
	 
	 <meta charset="utf-8" />
	 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<div>
		<?php
			$emailTo="msuarin@yahoo.com";
			$subject="I hope this works!";
			$body="I think you're great";
			$headers="From: msuarin@mail.usf.edu";
			
			if (mail($emailTo, $subject, $body, $headers))
			{
				echo "Mail sent successfully!";
			}
			else
			{
				echo "Mail not sent!";
			}
			
		?>
	</div>
	
</body>
</html>