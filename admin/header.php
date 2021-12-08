

<?php
ob_start();
session_start();
if (!isset($_SESSION['loginUserr']) && (!isset($_SESSION['senhaUserr']))) {
  header("Location: index.php?acao=negado");
  exit;
}
include_once('includes/sair.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Gestor Estoque</title>


  <!-- ICONE DA PÁGINA -->
  <link href="img/ui-sam.jpg" rel="icon">
  <link href="img/icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>






</head>

<body>




<?php
    include_once('conect/conect.php');
        $userEmail = $_SESSION['loginUserr'];
        $senhaUser = $_SESSION['senhaUserr'];
        $select = "SELECT * FROM admin WHERE email=:emailUser AND senha=:senhaUser";
        

        try{
        $resultado = $conect->prepare($select);
        $resultado->bindParam(':emailUser',$userEmail,PDO::PARAM_STR);
        $resultado->bindParam(':senhaUser',$senhaUser,PDO::PARAM_STR);
        $resultado->execute();
        //CONTA REGISTRO
        $contar = $resultado->rowCount();
        if ($contar > 0) {
          while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
            $id = $show->id;
            $nome = $show->nome;
            $email = $show->email;
            $fone = $show->fone;
            $cpf = $show->cpf;
            $senha = $show->senha;
            $avatar = $show->avatar;
            $status = $show->status;
            $ip = $show->ip;
            $horaA =  $show->hora;
            

          }
        } else {
          header("Location:  ?sair");
        }
        
        }catch(PDOException $e){
        echo "<b>ERRO DE PDO NO SELECT: </b>".$e->getMessage();
      }
       ?>

 <?php

include_once('conect/conect.php');

$user_name=$_SESSION['loginUserr']; 
$result = $conect->prepare("UPDATE admin SET hora=NOW() , ip='1' WHERE email='$user_name'");
$result->execute();



?>





  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Fechar menu"></div>
      </div>







      <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Fechar menu"></div>
      </div>
      <!--logo start-->
      <a href="home.php?acao=principal" class="logo"><b>ALMO<span>XARIFADO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
    
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">
                
<?php 
                    $select = "SELECT COUNT(idlembrar) FROM  mensagem;";
             
                  $result = $conect->prepare($select);
                  $result->execute();
                  $notificacao = $result-> fetchColumn();
      
                    echo   $notificacao ;
 ?>







              </span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p style="margin-bottom: 15px;" class="green">Você tem <?php echo $notificacao ?> novas mensagens</p>
              </li>



              <?php
              include_once('conect/conect.php');
 $select = "SELECT * FROM mensagem";
      try{
        $resultado = $conect->prepare($select);
          $resultado->execute();
          $contar = $resultado->rowCount();
          if ($contar>0) {
            while($show = $resultado->FETCH(PDO::FETCH_OBJ)){

              $idIdentidade = $show ->idIdentidade;
              
    ?>




              <li>
                <a href=" paginas/delete/deleteSMS.php?deletar=

<?php 

if ($id == $idIdentidade) {

  echo $show->idlembrar;

} else{
  echo('NÃO É POSSIVEL');
}

     ?> ">
                  <span class="photo"> <img alt="avatar"src="../img/<?php echo $show->avatar;?>">  </span>
                  <span class="subject">
                  <span class="from"><?php echo $show->nome;?></span>

                  </span>
                  <span class="message">
                   <?php echo $show->lembrar;?>

                  </span>
                  </a>
              </li>




              <?php
            
            }
} else {
echo '<div class="alert alert-danger" role="alert">Não!
</div>';
}
}catch(PDOException $e){
echo "<b>Erro de select do PDO</b>".$e->getMessage();
}

?>


            </ul>
          </li>



          



 <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-bell-o"></i>
       
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Lembretes</p>
              </li>




  <?php
  //

      $select = "SELECT * FROM alerta";

      try{
        $result = $conect->prepare($select);
          $result->execute();
          $contar = $result->rowCount();
          if ($contar>0) {
            while($show = $result->FETCH(PDO::FETCH_OBJ)){

$idUsuario = $show->idUsuario;


              if ($id == $idUsuario) {
               
              
              
    ?>

                
                        <li>
                                  <a href="paginas/delete/deleteAlerta.php?deletar=<?php  echo $show->id;?>  " onclick="return confirm('Deseja realmente deletar o Registro')">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                 <?php echo $show->msmalerta;?> 
                                    <span class="small italic">4 mins.</span>
                                    </a>
                                </li>


                           

             




       <?php
       }
            
            }
} else {
echo '<div class="alert alert-danger" role="alert">Não há dados!
</div>';
}
}catch(PDOException $e){
echo "<b>Erro de select do PDO</b>".$e->getMessage();
}

?>

            </ul>
          </li>




          <!-- notification dropdown end -->



 <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-warning sx  "></i>
    
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Alerta do estoque</p>
              </li>



              <?php
           $select = "SELECT * FROM meletrico ORDER BY id DESC";
            try{
              $result = $conect->prepare($select);
                $result->execute();
                $contar = $result->rowCount();
            
                if ($contar>0 ) { 
                  while($show = $result->FETCH(PDO::FETCH_OBJ)){                     
       


                    

                       $verificar = $show->qtdMinima;
                       $verificarProduto = $show->qtdProduto;


                    if ($verificarProduto<$verificar) {
                   
 

?>

                         <li>
                      <a href="#">
                        <span class="label label-danger" ><i class="fa fa-lightbulb-o"></i></span>

<?php echo $show->nome;?> no limite
                    </a>
                  </li>
                   <?php 

                    } 


           
                                           
                      }
          } else {
          echo '<div class="alert alert-danger" role="alert">NOT DADES
          </div>';
          }
          }catch(PDOException $e){
          echo "<b>Erro de select do PDO</b>".$e->getMessage();
          }

          ?>



<?php
           $select = "SELECT * FROM mexpediente ORDER BY id DESC";
            try{
              $result = $conect->prepare($select);
                $result->execute();
                $contar = $result->rowCount();
            
                if ($contar>0 ) { 
                  while($show = $result->FETCH(PDO::FETCH_OBJ)){                     
       


                    

                       $verificar = $show->qtdMinima;
                       $verificarProduto = $show->qtdProduto;


                    if ($verificarProduto<$verificar) {
                   
 

?>

                         <li>
                      <a href="#">
                        <span class="label label-danger" ><i class="fa fa-pencil"></i></span>

<?php echo $show->nome;?> no limite
                    </a>
                  </li>
                   <?php 

                    } 


           
                                           
                      }
          } else {
          echo '<div class="alert alert-danger" role="alert">NOT DADES
          </div>';
          }
          }catch(PDOException $e){
          echo "<b>Erro de select do PDO</b>".$e->getMessage();
          }

          ?>











          <?php
           $select = "SELECT * FROM mprocessamento ORDER BY id DESC";
            try{
              $result = $conect->prepare($select);
                $result->execute();
                $contar = $result->rowCount();
            
                if ($contar>0 ) { 
                  while($show = $result->FETCH(PDO::FETCH_OBJ)){                     
       


                    

                       $verificar = $show->qtdMinima;
                       $verificarProduto = $show->qtdProduto;


                    if ($verificarProduto<$verificar) {
                   
 

?>

                         <li>
                      <a href="#">
                        <span class="label label-danger" ><i class="fa fa-qrcode"></i></span>

<?php echo $show->nome;?> no limite
                    </a>
                  </li>
                   <?php 

                    } 


           
                                           
                      }
          } else {
          echo '<div class="alert alert-danger" role="alert">NOT DADES
          </div>';
          }
          }catch(PDOException $e){
          echo "<b>Erro de select do PDO</b>".$e->getMessage();
          }

          ?>










          <?php
           $select = "SELECT * FROM mlimpeza ORDER BY id DESC";
            try{
              $result = $conect->prepare($select);
                $result->execute();
                $contar = $result->rowCount();
            
                if ($contar>0 ) { 
                  while($show = $result->FETCH(PDO::FETCH_OBJ)){                     
       


                    

                       $verificar = $show->qtdMinima;
                       $verificarProduto = $show->qtdProduto;


                    if ($verificarProduto<$verificar) {
                   
 

?>

                         <li>
                      <a href="#">
                        <span class="label label-danger" ><i class="fa fa-wrench"></i></span>

<?php echo $show->nome;?> no limite
                    </a>
                  </li>
                   <?php 

                    } 


           
                                           
                      }
          } else {
          echo '<div class="alert alert-danger" role="alert">NOT DADES
          </div>';
          }
          }catch(PDOException $e){
          echo "<b>Erro de select do PDO</b>".$e->getMessage();
          }

          ?>




            </ul>


          </li>














        </ul>
        <!--  notification end -->












      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="?sair"   onclick="return confirm('Deseja realmente sair do sistema?')">Sair</a></li>
        </ul>
      </div>
    </header>

    </header>
 
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="home.php?acao=perfil&upperfil=<?php echo $id; ?>"><img src="../img/<?php echo $avatar;?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"> <?php echo $nome;?>  </h5>
       
                          <li class="sub-menu">
                              <span><a href="home.php?acao=relatorio"> <i class="fa  fa-bar-chart-o"></i>Relatório</a></span>        
                          </li>
                       
                          <li class="sub-menu">
                            <a href="javascript:;">
                              <i class="fa fa-dropbox"></i>
                              <span>Produtos</span>
                              </a>

                            <ul class="sub">
                              <li><a href="home.php?acao=limpeza">Material limpeza</a></li>
                              <li><a href="home.php?acao=processamentoDados">Processamento de dados</a></li>
                              <li><a href="home.php?acao=expediente"> Material de expediente</a></li> 
                              <li><a href="home.php?acao=eletrico2"> Material Elétrico</a></li> 


                            </ul>

                          </li>

                         
                          <li  class="sub-menu"> 
                            <span> <a href="home.php?acao=configuracao" ><i class="fa fa-gears "></i> Configuração</a> </span>
                          </li>  
                          

                           <li  class="sub-menu"> 
                            <span> <a href="includes/manual_de_uso.pdf" download="manualdeuso.pdf"><i class="fa fa-files-o "></i> Manual do Usuário</a> </span>
                          </li>  

        </ul>
      </div>
    </aside>

    





 
 


 


 