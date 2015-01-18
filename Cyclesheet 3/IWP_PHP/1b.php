<!DOCTYPE HTML>
<html>
	<head>
		<title> Activity 1b </title>
	</head>
	<body>
		<h1>Activity 1b</h1>
		<p>
			Create a page to accept details of account holder and add it to array using PHP script and
			perform at least four unique array operations on it.
		</p>
		<form action="" method="get">
			<h2>Enter following details: </h2>
			Account No: <input type="number" name="acc_no" /><br>
			First Name: <input type="text"name="f_name" /><br>
			Last Name: <input type="text"name="l_name" /><br>
			Phone: <input type="tel" name="phone" /><br>
			Address: <textarea name="address"></textarea><br>
			<input type="submit" value="submit" />
		</form>
		<?php
			if(!empty($_GET)){
				$details = array($_GET['acc_no'],$_GET['f_name'],$_GET['l_name'],$_GET['phone'],$_GET['address']);
				echo "<br>Original Array: ";
				print_r($details);
				array_push($details, "pushed_value");
				echo "<br>Push operaiton: ";
				print_r($details);
				array_pop($details);
				echo "<br>Pop operation: ";
				print_r($details);
				echo "<br>Slice operation: ";
				print_r(array_slice($details,0, 2));
				echo "<br>Splice operation: ";
				array_splice($details, 0 , 1, 200);
				print_r($details);
				echo "<br>Flip operation: ";
				print_r(array_flip($details));
			}
		?>
	</body>
</html>