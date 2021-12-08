<?php
     require_once '../conn.php';
  if(isset($_POST['botaoR'])){
  $r = trim(strip_tags($_POST['r']));
  $id = $_POST['id'];
    $NovaSS =  $_POST['qtdProduto'];   
    $retirados =  $_POST['Pretirados']; 
    
    $Nova =   $NovaSS - $r;
    $NovaSoma =   $retirados + $r;     

     $qtdProduto =  $_POST['r']; 
    $date= date_create()-> format('Y-m-d');
    $nome = $_POST['nome'];
                       
mysqli_query($conn, "UPDATE `mlimpeza` SET `qtdProduto` = '$Nova',  `Pretirados` = '$NovaSoma' WHERE `id` = '$id'") or die(mysqli_error());
mysqli_query($conn, "INSERT INTO `rellimpeza` VALUES('', '$nome', '$qtdProduto', '$date')") or die(mysqli_error());


    header("location: ../../home.php?acao=limpeza");
  }
          ?>