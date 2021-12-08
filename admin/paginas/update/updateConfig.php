<?php
	require_once '../conn.php';
	
	if(ISSET($_POST['botaoConfig'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
	;
		
		mysqli_query($conn, "UPDATE `admin` SET `status` = '$status' WHERE `id` = '$id'") or die(mysqli_error());

		header("location: ../../home.php?acao=configuracao");
	}

?>