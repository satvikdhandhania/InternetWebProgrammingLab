<!DOCTYPE HTML>
<html>
	<head>
		<title> Activity 1 a </title>
	</head>
	<body>
		<h1>Activity 1</h1>
		<p>
			Design a page to accept your name (first and last) and perform at least five unique string
			operations on it through PHP script.
		</p>
		<br />
		<form action="" method="get">
			First Name:
			<input type="text" name="f_name" /><br>
			Last Name:
			<input type="text" name="l_name" /><br>
			<input type="submit" value="Submit" />
		</form>
		<br>
		<p>
			<?php
				
			if ((isset($_GET['f_name']))&&(isset($_GET['l_name']))){
				//echo "something";
				$f_name = $_GET['f_name'];
				$l_name = $_GET['l_name'];
				$name = $f_name." ".$l_name;
				echo "<br>Concatenated String: ".$name; 
				echo "<br>Length of String: ".strlen($name);
				echo "<br>Reverse: ".strrev($name);
				echo "<br>Uppercase: ".strtoupper($name);
				echo "<br>Substring(first 4 characters): ".substr($name, 0, 4);
							
			}
			else{
				echo "<br>Enter a First name and a Last name";
			}
			?>
		</p>
	</body>
</html>