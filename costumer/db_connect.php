<?php
	
	error_reporting(~E_DEPRECATED & ~E_NOTICE);

	$host = "localhost";
	$user = "root";
	$pw = "";
	$db_name = "costumer";

	$conn = mysqli_connect($host,$user,$pw,$db_name);

	if(!$conn) {
		echo "error";
	}

?>