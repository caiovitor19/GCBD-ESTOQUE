<?php
	require_once '../conn.php';
	
	if(ISSET($_POST['update'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$qtdProduto = $_POST['qtdProduto'];
		$qtdMinima = $_POST['qtdMinima'];
		
		mysqli_query($conn, "UPDATE `meletrico` SET `nome` = '$nome', `qtdProduto` = '$qtdProduto', `qtdMinima` = '$qtdMinima' WHERE `id` = '$id'") or die(mysqli_error());

		header("location: ../../home.php?acao=eletrico2");
	}

?>