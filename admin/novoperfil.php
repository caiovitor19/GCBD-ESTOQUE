<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Gestor Estoque</title>

  <!-- Favicons -->
  <link href="img/icon.jpg" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  

</head>

<body style="color:#fff;">
  <div class="container">
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    
      <form role="form" action="" method="post" enctype="multipart/form-data" id="form_NovoPerfil">
       
      

<div class="col-lg-6" style="margin-left: 25%; margin-top: 5%;">

   <h2 class="form-login-heading">Criar Conta</h2>
  
                       <div class="form-group ">
                              <label class="control-label">Nome</label>                    
                              <input  type="text" lenght="10" placeholder=" " name="nome" id="nome" class="form-control">                     
                        </div>

                        <div class="form-group">

                             <label class="control-label"> Foto do Perfil </label>                           
                              <input type="file"  placeholder=" " name="avatar" id="imgP" id="exampleInputFile" class="file-pos">               
                        </div>

                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input type="text" placeholder=" " name="email" id="email" class="form-control">
                       </div>
                           

                   <div class="row">
              


                          <div class="col-lg-6">
                            <div class="form-group ">
                              <label class="control-label">Telefone</label>
                              <input type="text"  placeholder=" " name="fone" id="fone" class="form-control">
                          </div>
                          </div>

                          <div class="col-lg-6">
                               <div class="form-group">
                              <label class="control-label">CPF</label>
                              <input type="text" placeholder=" " name="cpf" id="cpf" class="form-control">
                          </div>
                          </div>

                          <input type="hidden" name="status" value="0">

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="control-label">Digie sua senha</label>
                              <input type="password" placeholder=" " name="senha"  id="senha" id="addr1" class="form-control">
                          </div>

                          </div>


                        



            </div>

 <button class="btn btn-theme " name="botaoPerfil" type="submit"><i class=""></i> Criar</button>
          <hr>
          </form>
          <?php
							include_once('conect/conect.php');
						      if (isset($_POST['botaoPerfil'])) {
			$nome = $_POST['nome'];
      $email = $_POST['email'];
      $fone = $_POST['fone'];
      $cpf = $_POST['cpf'];
		    $senha =     trim(strip_tags(base64_encode($_POST['senha'])));
			$status = $_POST['status'];
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
			if(in_array($extensao, $formatosPermitidos)):
				//echo "Existe a extenção .{$extensao}";
				$pasta = "img/";
				$temporario = $_FILES['avatar']['tmp_name'];
				$novoNome = uniqid().".{$extensao}";

				if (move_uploaded_file($temporario, $pasta.$novoNome)) {
							$cadastro = "INSERT INTO admin (avatar,nome,fone,email,cpf,senha,status) VALUES (:avatar,:nome,:fone,:email,:cpf,:senha,:status)";

				            try{
                      $result = $conect->prepare($cadastro);
                        $result->bindParam(':avatar',$novoNome,PDO::PARAM_STR);
                        $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                        $result->bindParam(':fone',$fone,PDO::PARAM_STR);
                        $result->bindParam(':email',$email,PDO::PARAM_STR);
                        $result->bindParam(':cpf',$cpf,PDO::PARAM_STR);
				                $result->bindParam(':senha',$senha,PDO::PARAM_STR);			              
				                $result->bindParam(':status',$status,PDO::PARAM_INT);
				                $result->execute();

				                $contar = $result->rowCount();
				                if($contar>0){
				                	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>CADASTRADO COM SUCESSO!</strong> Solicite acesso ao administrador</div>';
				                	header("Refresh: 4, index.php");
				                }else{
				                	echo 'Dados não cadastrados!';
				                	header("Refresh: 4, index.php");
				                }
				            }catch(PDOException $e){
				                echo "<b>ERRO DE PDO= </b>".$e->getMessage();
				            }
					//$mensagem = "Upload feito com sucesso!";
				}else{
					$mensagem = "Erro, não foi possivel fazer o upload do arquivo!";
				}
			else:
				echo  "Formato inválido";
			endif;
			//var_dump($_FILES);
		}
						    ?>


</div>
     


    

    
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/fundo.jpg", {
      speed: 500
    });
  </script>


<script type="text/javascript" src="lib/bootstrap/js/jQueryMasked.js"></script>
<script type="text/javascript" src="lib/bootstrap/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="lib/bootstrap/js/util.validate.js"></script>



    <script>
    jQuery(function($){
      $("#cpf").mask('999.999.999-99');
      $("#fone").mask('(99) 9999-99-99');
    });
    </script>





<script>
    $(function(){
        $("#form_NovoPerfil").validate({
          rules: {
            nome:{
              required: true
            },
            imgP:{
              required: true
            },
            email:{
              required: true
            },
            fone:{
              required: true
            },
            cpf:{
              required: true
            },
            senha:{
              required: true
            },
           
          },
          messages: {
            nome: {
              required: "Digite seu nome!"
            },
            imgP: {
              required: "Envio de foto obrigatório!"
            },
            email: {
              required: "Digite seu e-mail!"
            },
            fone: {
              required: "Digite seu telefone!"
            },
            cpf: {
              required: "Digite um CPF válido!"
            },
            senha: {
              required: "Digite sua senha!"
            },
            
          }
        });
    });
    </script>

















</body>

</html>
