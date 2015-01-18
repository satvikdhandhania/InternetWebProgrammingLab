<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$str=$_POST['accno'];
$str="$str ".$_POST['name'];
$str="$str ".$_POST['mail'];
$str="$str ".$_POST['contact'];
$arr = explode(" ",$str);
echo "<br> Array is ";
print_r($arr);
echo "<br>1. Reversed Array = ";
print_r(array_reverse($arr));
echo "<br>2. Number of elements in array = ".count($arr);
echo "<br>3. End element of array = ".end($arr);
echo "<br>4. Array Elements after shuffling = ";
shuffle($arr);
print_r($arr);
}
else
{
?>
<!DOCTYPE HTML>
<html>
<head><title>Array Manipulation</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<label>Account Number :</label>
<input type="text" name="accno"><br>
<label>Name :</label>
<input type="text" name="name" ><br>
<label>Email :</label>
<input type="text" name="mail" ><br>
<label>Contact :</label>
<input type="text" name="contact" ><br>
<input type="submit">
</form>
</body>
</html>
<?php
}
?>