<!DOCTYPE HTML>
	<?php
		//conection:
			if(!empty($_POST)){
				$msg = "Invalid username or password";
				$link = mysqli_connect("localhost:3306", "root", "", "test") or die("Error " . mysqli_error($link));	
				//consultation:	
				$query = "SELECT * FROM users where user_name = '".$_POST['u_name']."' AND password= '".$_POST['password']."';" or die("Error " . mysqli_error($link));	
				//execute the query.	
				//echo $query;
				$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link));	
				//display information:
				if(mysqli_num_rows($result) != 1){
				 	$fail = 1;
				}
				else{
					$fail = 0;
				}
		}
		?>
<html>
	<head>
		<title> Activity 2 </title>
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Activity 2</h1>
		<p>
			Create a PHP script that will output a form containing 2 fields: username and password.
			Upon submission of the form, the code should check against the database to see whether
			the username and password pair was correct. If so, display a welcome message. If not,
			display the message "Invalid username or password" followed by the same login form.
		</p>
		<form action="" method="post">
			<h2>Login Form:</h2>
			<p class="errmsg"><?php
			if (isset($fail)) {echo $msg;} ?></p>
			Name: <input type="text" name="u_name" /><br>
			Password: <input type="password" name="password" /><br>
			<input type="submit" value="Submit"/>
		</form>		
	
			<?php
			if ((isset($fail))&&($fail == 0)) {
			echo   
			"<script>
				window.location.replace(\"logged_in.php\");
				
			</script>";
			} ?></p>
	</body>
</html>