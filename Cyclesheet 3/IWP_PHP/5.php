<!DOCTYPE HTML>
			<?php
			if(!empty($_POST)){	
				$name_pattern = "/^[a-zA-Z]?[a-z]+$/";
				$address_pattern = "/ [.]*[a-zA-Z]+[.]* /";
				$valid = 1;
			}
			?>
<html>
	<head>
		<title> Activity 5 </title>
		<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h1>Activity 5</h1>
		<p>
			Design a web page and on submission validate all entries and display the information in
			table format using PHP. Form should contain name, address, Sex in radio button (validate
			radio button) and Education detail in option box.
		</p>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			First Name:
			<input type="text" name="f_name"/>
				<p class="errmsg">
				<?php
				if ((isset($_POST['f_name'])) && (!preg_match($name_pattern, $_POST['f_name']))) {
				$valid = 0;
				echo "*Invalid first name";}
				?>
				</p>
			<br />
			Last Name:
			<input type="text" name="l_name" />
			<p class="errmsg">
				<p class="errmsg">
				<?php
				if ((isset($_POST['l_name'])) && (!preg_match($name_pattern, $_POST['l_name']))) {
					$valid = 0;	
					echo "*Invalid first name";
				}
				?>
				</p>
			<br>
			Address:
			<input type="text" name="address" />
			<p class="errmsg">
			<?php
			if ((isset($_POST['address'])) && (!preg_match($address_pattern, $_POST['address']))) {
				$valid = 0;
				echo "*Invalid address";}
				?>
			</p>
			<br>
			Sex:
			<p class="errmsg">
			<?php
			if (!isset($_POST['sex'])) {
				$valid = 0;
				echo "*Required";}
				?>
			</p>
			<br>
			<input type="radio" name="sex" value="Male"/>
			Male
			<br>
			<input type="radio" name="sex" value="Female"/>
			Female
			<br>
			Education details:
			<p class="errmsg">
			<?php
			if (!isset($_POST['education'])) {
				$valid = 0;
				echo "*Required";}
				?>
			</p>
			<br>
			<input type="radio" name="education" value="Secondary"/>
			Secondary
			<br>
			<input type="radio" name="education" value="Higer Secondary"/>
			Higher Secondary
			<br>
			<input type="radio" name="education" value="Graduation"/>
			Graduation
			<br>
			<input type="radio" name="education" value="Post Graduation"/>
			PostGraduation
			<br>
			<input type="submit" value="Submit" />
		</form>
		<?php
		if($valid){
			echo "
				<table>
					<tr>
						<td>First name: </td>
						<td>".$_POST['f_name']." </td>
					</tr>
					<tr>
						<td>Last name: </td>
						<td>".$_POST['l_name']." </td>
					</tr>
					<tr>
						<td>Address: </td>
						<td>".$_POST['address']." </td>
					</tr>
					<tr>
						<td>Sex: </td>
						<td>".$_POST['sex']." </td>
					</tr>
					<tr>
						<td>Education </td>
						<td>".$_POST['education']." </td>
					</tr>
				</table>
			";
		}
		?>
	</body>
</html>