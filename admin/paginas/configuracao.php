
   <section style="background: #eaeaea;" id="main-content">
      <section class="wrapper site-min-height">
     
  

<div class="row mt">
<div class="col-lg-12">


            <div class="row content-panel">
              <div class="profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                
 <div  class="detailed" style="margin-top: 4%;"><h4>EDITAR ACESSO</h4></div>



 <table  class="table display" id="minhaTabela">
                          <thead>
                                  <tr>                    
                                   <th scope="col" ></th>           
                                    <th scope="col" >Nome</th>                               
                                    <th scope="col">Status</th>
                                    <th scope="col">Excluir</th>
                                    <th scope="col">Editar</th>
                                  </tr>
                          </thead>

                          <tbody>

             <?php
                          require 'conn.php';
                          $query = mysqli_query($conn, "SELECT * FROM admin") or die(mysqli_error());
                          while($fetch = mysqli_fetch_array($query)){
                        ?>
                        <tr>   

                                    <td> 
                                    <img style=" text-align: center; border-radius: 100%; width: 50px" src="../img/<?php echo $fetch['avatar']?>">
                                    </td>
                                    <td>
                                    <h4 style="color: #5bc0de; font-weight: bolder;"> <?php echo $fetch['nome']?> </h4>
                                    </td>
                              <td style="font-style: italic;"> 
                              
                              <?php           
      $status =  $fetch['status'];
      if($status==0){
        echo 'Acesso negado';
      }elseif ($status == 1) {
        echo 'Usuário comum';
      }elseif ($status == 2) {
        echo 'Administrador(a)';
      }
    ?></td>
                 <td><a href="paginas/delete/deleteUser.php?deletar=<?php echo $fetch['id']?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar o Registro')"><i class="fa fa-trash-o"></i></a></td>
                             
                               <td><button id="adicionarNOVO" type="button" class="btn btn-info" data-toggle="modal"  data-target="#update_modal<?php echo $fetch['id']?>">   <i class="fa fa-pencil" ></i>        </button></td>

                                  </tr>

                       <?php
                        
                        include 'modal_update/modalConfig.php';
                          }
                        
                      ?>
                           </tbody>
                      </table>






                   </div>
                </div>
              </div>
























      </section>
      <!-- /wrapper -->
    </section>











 
