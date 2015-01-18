<?php
$file = fopen("saves/name.txt", "w+");
$name = "First Name: " . $_GET['f_name'] . "\r\nLast Name: " . $_GET['l_name'];
fwrite($file, $name);
$lines = 0;
fseek($file, 0);
while (!feof($file)) {
	echo "<br>".fgets($file);
	$lines++;
}
echo "<br>No of lines: ". $lines;
fclose($file);
?>