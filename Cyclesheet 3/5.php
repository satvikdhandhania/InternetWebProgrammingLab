<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php
$nameErr = $genderErr = $tenthErr= $twelthErr=$cgpaErr = "";
$name = $gender = $address = $tenth=$twelth=$cgpa = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
       }
     }
   if (empty($_POST["adr"]))
     {$address = "";}
   else
     {
     $address = test_input($_POST["adr"]);
     }
   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";}
   else
     {$gender = test_input($_POST["gender"]);}
	  if (empty($_POST["tenth"]))
     {$tenthErr = "Marks is required";}
	  else
     {$tenth = test_input($_POST["tenth"]);}
	  if (empty($_POST["twelth"]))
     {$twelthErr = "Marks is required";}
	  else
     {$twelth = test_input($_POST["twelth"]);}
	  if (empty($_POST["cgpa"]))
     {$cgpaErr = "Marks is required";}
	  else
     {$cgpa = test_input($_POST["cgpa"]);}
	 
	 
	 echo "<table border='1'>
<tr>
<th>Name</th>
<th>Address</th>
<th>Gender</th>
<th>10th Marks</th>
<th>12th Marks</th>
<th>CGPA</th>
</tr>";
  echo "<tr>";
  echo "<td>" . $name. "</td>";
  echo "<td>" . $address. "</td>";
  echo "<td>" . $gender. "</td>";
  echo "<td>" . $tenth. "</td>";
  echo "<td>" . $twelth. "</td>"; 
  echo "<td>" . $cgpa. "</td>"; 
  echo "</tr>";
echo "</table>";
echo"<br><br>";
	 
}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label>First Name :</label>
<input type="text" name="name"> <span class="error">* <?php echo $nameErr;?></span><br>
<label>Address :</label>
<input type="text" name="adr" size="40"><br>
<label>Gender :</label>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
 <span class="error">* <?php echo $genderErr;?></span><br>
<label>Education :</label>
<label>Marks in 10th :</label><input type="text" name="tenth"> <span class="error">* <?php echo $tenthErr;?></span><br>
<label>Marks in 12th :</label><input type="text" name="twelth"> <span class="error">* <?php echo $twelthErr;?></span><br>
<label>Current CGPA : </label><input type="text" name="cgpa"> <span class="error">* <?php echo $cgpaErr;?></span><br>
<input type="submit">
</form>

	 

</body>
</html>
