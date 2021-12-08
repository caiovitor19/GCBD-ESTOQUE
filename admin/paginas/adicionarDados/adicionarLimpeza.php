<?php

require_once '../conn.php';

	if(ISSET($_POST['AdicionarLimpeza'])){
		$nome = $_POST['nome'];
		$qtdProduto = $_POST['qtdProduto'];
		$validade = $_POST['validade'];
		$qtdMinima = $_POST['qtdMinima'];
		$Pretirados = $_POST['Pretirados'];
		
mysqli_query($conn, "INSERT INTO `mlimpeza` VALUES('', '$nome', '$qtdMinima', '$validade', '$qtdProduto', '$Pretirados')") or die(mysqli_error());
		
		header("location:../../home.php?acao=limpeza");
	}
?>