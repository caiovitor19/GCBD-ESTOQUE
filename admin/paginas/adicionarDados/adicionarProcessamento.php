<?php

require_once '../conn.php';

	if(ISSET($_POST['AdicionarProcessamento'])){
		$nome = $_POST['nome'];
		$qtdProduto = $_POST['qtdProduto'];
		$qtdMinima = $_POST['qtdMinima'];
		$Pretirados = $_POST['Pretirados'];
		
mysqli_query($conn, "INSERT INTO `mprocessamento` VALUES('', '$nome', '$qtdMinima', '$qtdProduto', '$Pretirados')") or die(mysqli_error());
		
		header("location:../../home.php?acao=processamentoDados");
	}
?>