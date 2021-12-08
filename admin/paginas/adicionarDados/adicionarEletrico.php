<?php

require_once '../conn.php';

	if(ISSET($_POST['AdicionarEletrico'])){
		$nome = $_POST['nome'];
		$qtdProduto = $_POST['qtdProduto'];
		$qtdMinima = $_POST['qtdMinima'];
		$Pretirados = $_POST['Pretirados'];
		
mysqli_query($conn, "INSERT INTO `meletrico` VALUES('', '$nome', '$qtdMinima', '$qtdProduto', '$Pretirados')") or die(mysqli_error());
		
		header("location:../../home.php?acao=eletrico2");
	}
?>