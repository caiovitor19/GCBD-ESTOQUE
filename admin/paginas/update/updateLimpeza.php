<?php
	require_once '../conn.php';
	
	if(ISSET($_POST['update'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
        $qtdProduto = $_POST['qtdProduto'];
        $validade = $_POST['validade'];
		$qtdMinima = $_POST['qtdMinima'];
		
		mysqli_query($conn, "UPDATE `mlimpeza` SET `nome` = '$nome', `qtdMinima` = '$qtdMinima' , `validade` = '$validade', `qtdProduto` = '$qtdProduto'   WHERE `id` = '$id'") or die(mysqli_error());

		header("location: ../../home.php?acao=limpeza");
	}

?>