<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$txt=$_POST['fname'];
$txt= "$txt ".$_POST['lname'].PHP_EOL;
$file=fopen("Info.txt","a") or exit("Unable to open file!");
fwrite($file,$txt);
fclose($file);
$file = fopen("Info.txt", "r") or exit("Unable to open file!");
$count = 0;
while(!feof($file))
  {
  echo fgets($file). "<br>";
  $count++;
  }
fclose($file);
$count--;
echo "<br>Number of lines in file = $count";

echo "<br>Size of file  = ".filesize('Info.txt')." bytes";
}


else
{
?>
<!DOCTYPE HTML>
<html>
<head><title>File</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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