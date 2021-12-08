
<body>
  <section style="background: #eaeaea;" id="container">
    
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->


     <?php
        
      

            $select = "SELECT * FROM admin WHERE id=:id";

            try{
              $resultado = $conect->prepare($select);
                $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                $resultado->execute();
                //CONTA REGISTRO
                $contar = $resultado->rowCount();
                if($contar > 0){
                  while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                    $id = $show->id;
                    $nome = $show->nome;
                    $avatar = $show->avatar;
                    $email = $show->email;
                    $senha = $show->senha;
                    $cpf = $show->cpf;
                    $fone = $show->fone;

                  }
                }else{
                  echo '<div class="alert alert-danger"> <strong>Aviso!</strong> Não há dados com o id(parametro) informado :( </div>';
                }
            }catch(PDOException $e){
                echo "<b>ERRO DE PDO NO SELECT: </b>".$e->getMessage();
            }
        ?>


    <section  id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>E-mail</h4>
                  <h6><?php echo $email; ?></h6>

                  <h4>Telefone</h4>
                  <h6><?php echo $fone; ?>"</h6>
                  <h4>
                    

  <!-- <?php           
      
      if($status==0){
        echo 'Acesso negado';
      }elseif ($status == 1) {
        echo 'Diretor';
      }elseif ($status == 2) {
        echo 'Coordenador(a)';
      }elseif ($status == 3) {
        echo 'Secretario(a)';
      }
      else{
        echo 'Administrador';
      }
    ?> -->


                  </h4>
                 <!--  <h6>Função</h6> -->
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $nome; ?></h3>
                <h6>
                  
                    <?php           

      if($status==0|1|2|3){
        echo 'Usuário comum';
      }
      else{
        echo 'Administrador principal';
      }
    ?>

                </h6>
                <p>Gerencie este sistema com responsabilidade, lemebre-se do seu dever com o Estado e a instituição EEEP José Maria</p>
                <br>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="../img/<?php echo $avatar; ?>" class="img-circle"></p>
                
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->









          <div class="col-lg-12 mt">
            <div class="row content-panel">  
                  <div  >
                    <div class="row">
                      <div class="col-lg-12 detailed">
                       

    
      <form action="" method="post" enctype="multipart/form-data" id="form_NovoPerfil">
       
       <h4 class="mb">Editar informações</h4>

                      <div class="col-lg-6" style="margin-left: 25%; ">

  
  
                       <div class="form-group ">
                              <label class="control-label">Nome</label>                    
                              <input  value="<?php echo $nome; ?>" type="text" lenght="10"  name="nome" id="nome" class="form-control">                     
                        </div>

                        <div class="form-group">

                             <label class="control-label"> Foto do Perfil </label>                           
                              <input  value="<?php echo $avatar; ?>" type="file"   name="avatar" id="avatar" id="exampleInputFile" class="file-pos">               
                        </div>

                        <div class="form-group">
                            <label class="control-label">E-mail</label>
                            <input  value="<?php echo $email; ?>" type="text" name="email" id="email" class="form-control">
                       </div>
                           

                <div class="row">
              


                          <div class="col-lg-6">
                            <div class="form-group ">
                              <label class="control-label">Telefone</label>
                              <input  value="<?php echo $fone; ?>" type="text"   name="fone" id="fone" class="form-control">
                          </div>
                          </div>

                          <div class="col-lg-6">
                               <div class="form-group">
                              <label class="control-label">CPF</label>
                              <input  value="<?php echo $cpf; ?>" type="text"  name="cpf" id="cpf" class="form-control">
                          </div>
                          </div>


                         
                          </div>


               
                            <div class="form-group">
                            <label class="control-label">Senha</label>
                              <input name="senha" value="<?php echo base64_decode($senha);?>" type="password" id="addr2" class="form-control">
                          </div>
                          

 <button type="submit" class="btn btn-theme " name="botaoAtualizar" ><i></i>Atualizar</button>

          <hr>

            </div>





</div>

      </form>


                      </div>
                      <!-- /col-lg-8 -->





<?php


if(!isset($_GET['upperfil'])){
            header("Location: home.php");
            exit;
          }
          $id = $_GET['upperfil'];


      if (isset($_POST['botaoAtualizar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $fone = $_POST['fone'];
            $senha =     trim(strip_tags(base64_encode($_POST['senha'])));


            if(!empty($_FILES['avatar']['name'])){
              $formatosPermitidos = array("png","jpeg","jpg","gif");
              $extensao = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
              if(in_array($extensao, $formatosPermitidos)):
                $pasta = "imapens/";
                $temporario = $_FILES['avatar']['tmp_name'];
                $novoNome = uniqid().".{$extensao}";

                if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                  //Upload da Imagem
                }else{
                  $mensagem = "Erro, não foi possivel fazer o upload do arquivo!";
                }
              else:
                echo  "Formato inválido";
              endif;
            }else{
              $novoNome = $avatar;
            }
  $update = "UPDATE admin SET avatar=:avatar,nome=:nome,fone=:fone,email=:email,cpf=:cpf,senha=:senha WHERE id=:id";

                  try{
                    $result = $conect->prepare($update);
                      $result->bindParam(':id',$id,PDO::PARAM_STR);
                      $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                      $result->bindParam(':email',$email,PDO::PARAM_STR);
                      $result->bindParam(':cpf',$cpf,PDO::PARAM_STR);
                      $result->bindParam(':fone',$fone,PDO::PARAM_STR);
                      $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                      $result->bindParam(':avatar',$novoNome,PDO::PARAM_STR);
                      $result->execute();

                      $contar = $result->rowCount();
                      if($contar>0){
                        echo '<div class="alert alert-success" role="alert">
                    Dados atualizados com sucesso, redirecionando para página de login!
                  </div>';
                        header("Refresh: 4, ?sair");
                      }else{
                        echo '<div class="alert alert-danger" role="alert">
                    Dados não atualizados!
                  </div>';
                      }
                  }catch(PDOException $e){
                      echo "<b>ERRO DE PDO= </b>".$e->getMessage();
                  }

            
            //var_dump($_FILES);
          }
        ?>

                    
                  </div>
                  </div>
                 </div>
                    <!-- /row -->
                  </div>
                 


      </section>
      <!-- /wrapper -->
    </section>
 




