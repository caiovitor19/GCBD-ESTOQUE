<?php
	$conn = mysqli_connect("localhost", "root", "", "sistema_almoxarifado");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>