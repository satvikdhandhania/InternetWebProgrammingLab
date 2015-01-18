<?php
if(isset($_GET['fname']))
{
$fname=$_GET['fname'];
$lname= $_GET['lname'];
echo "first Name= $fname <br> last Name= $lname";
$add = "$fname"." $lname";
echo "<br>1. String after Concatenation =  $add ";
echo "<br>2. Length Of string = ".strlen($add);
echo "<br>3. Number of words in String= ".str_word_count($add);
echo "<br>4. Reversed String = ".strrev($add);
echo "<br>5. String in Uppercase= ".strtoupper($add);
}


else
{
?>
<!DOCTYPE HTML>
<html>
<head><title>String Manipulation</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<label>First Name :</label>
<input type="text" name="fname"><br>
<label>Last Name :</label>
<input type="text" name="lname" ><br>
<input type="submit">
</form>
</body>
</html>
<?php
}
?>