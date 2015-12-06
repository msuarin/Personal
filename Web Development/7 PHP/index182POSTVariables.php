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
			
			$myNames = array("Mark", "Anna", "Andrew");

			if ($_POST["submit"])
			{
				if($_POST["name"])
				{
					foreach($myNames as $name)
					{
						if ($name == $_POST["name"])
						{
							echo "I know you! Your name is ".$name;
							$knowYou=1;
						}
					}
					
					/*If the variable $knowYou doesn't exist */
					if(!$knowYou) echo "I don't know you, ".$_POST['name'];
				}
				else
				{
					echo "Please enter your name";
				}
			}
		?>
		<form method="post">
			<label for="name">Name</label>
			<input name="name" type="text" />
			<input type="submit" name="submit" value="Submit Your Name" />
		</form>
		
	</div>
	
</body>
</html>