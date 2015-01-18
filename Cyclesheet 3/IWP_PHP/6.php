<!DOCTYPE HTML>
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
	<head>
		<title> Activity 6 </title>
	</head>
	<body>
		<h1> Activity 6 </h1>
		<p>
			Write a PHP code to wish the customer according to time and use cookie to display
			number of visits to that page (use database for storing customer information). Use
			appropriate customer form such as name and address for input. Also find unique visitors
			of that page through sessions.
		</p>
		<form action="" method="post">
			Enter name: <input type="text" name="name" /><br>
			Address: <input type="text" name="address" /><br>
			<input type="submit" value="submit" /><br>
		</form>
		<?php
		if(!empty($_POST)){
		$con = mysqli_connect('localhost:3306', 'root', '', 'test') or  die('Could not connect: ' . mysqli_connect_error());
		$query = "INSERT INTO users(user_name, address) VALUES('".$_POST['name']."','".$_POST['address']."');";
		//echo $query;
		$result = mysqli_query($con, $query) or die('Query execution failed: '. mysqli_error($con));
		if ($result){
			echo "<br>Database updated<br>";
		}
		mysqli_close($con);
			if(!isset($_COOKIE['views'])){		//if the user has already visited, ignore him 
				if (isset($_SESSION['views'])){
					$_SESSION['views']++;
				}
				else{
					$_SESSION['views']= 1;
				}
			}
			if (!isset($_COOKIE['views'])){
				setcookie("views", 1 , time() + 24*60*60*60);
			}
			else{
				 setcookie("views", $_COOKIE['views'] + 1 , time() + 24*60*60*60);
		
			}
		echo "You have visited : ".$_COOKIE['views']." times<br>";
		echo "Current viewers: ".$_SESSION['views']."<br>";
		} 
		?>
	</body>
</html>