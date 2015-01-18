<!DOCTYPE html>
<?php
	$name_pattern = "/^[a-zA-Z]?[a-z]+$/";
	$valid = 1;
	if(!preg_match($pattern, $_POST['f_name'])){
		$valid = 0;
	}
?>