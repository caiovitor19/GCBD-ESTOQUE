<?php
     require_once '../conn.php';
  if(isset($_POST['botaoR'])){

    $r = trim(strip_tags($_POST['r']));
    $id = $_POST['id'];
    $nome = $_POST['nome'];  
    $NovaSS =  $_POST['qtdProduto'];   
    $retirados =  $_POST['Pretirados']; 
    $qtdProduto =  $_POST['r']; 
    $date= date_create()-> format('Y-m-d');
    $Nova =   $NovaSS - $r;
    $NovaSoma =   $retirados + $r;  

                       
mysqli_query($conn, "UPDATE `meletrico` SET `qtdProduto` = '$Nova', `Pretirados` = '$NovaSoma' WHERE `id` = '$id'") or die(mysqli_error());

mysqli_query($conn, "INSERT INTO `releletrico` VALUES('', '$nome', '$qtdProduto', '$date')") or die(mysqli_error());

    header("location: ../../home.php?acao=eletrico2");
  }
          ?>