
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
                                    <img style=" text-align: center; border-radius: 100%; width: 50px" src="img/<?php echo $fetch['avatar']?>">
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
        echo 'Diretor';
      }elseif ($status == 2) {
        echo 'Coordenador(a)';
      }elseif ($status == 3) {
        echo 'Secretario(a)';
      }
      else{
        echo 'Administrador';
      }
    ?></td>
                 <td><a href="paginas/delete/deleteUser.php?deletar=<?php echo $show ->id ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar o Registro')"><i class="fa fa-trash-o"></i></a></td>
                             
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



















<!-- EDICAO DOS DADOS DA ESCOLA -->


    <div class="row content-panel" style="margin-top: 7%;">
              <div class="profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                
 <div  class="detailed" style="margin-top: 4%;"><h4>EDITAR DADOS DA ESCOLA</h4></div>

 <div class="col-md-6 profile-text mt mb ">
                <div class="right-divider hidden-sm hidden-xs">

<div class="profile-pic">

                  <p><img src="img/icon.jpg" class="img-circle"></p>
                
                </div>


   <h3>JMF</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
          
                  <h4>E-mail</h4>
                  <h6>2018infor07@gmail.com</h6>

                  <h4>Telefone</h4>
                  <h6>(85) 9-9187-3201</h6>
                  
               <div class="col-md-12 centered">
               
              </div>

                
                <br>
                
                </div>
              </div>
 
  <div class="col-md-4 profile-text">

    <form>
      
 <div class="form-group ">
                              <label class="control-label">Nome</label>                    
                              <input  type="text" lenght="10" placeholder=" " name="nome" id="nome" class="form-control">                     
                        </div>
                         <div class="form-group ">
                              <label class="control-label">Nome</label>                    
                              <input  type="text" lenght="10" placeholder=" " name="nome" id="nome" class="form-control">                     
                        </div>

 <div class="form-group ">
                              <label class="control-label">Nome</label>                    
                              <input  type="text" lenght="10" placeholder=" " name="nome" id="nome" class="form-control">                     
                        </div>




    </form>
               
              </div>



                   </div>
                </div>
              </div>
<!-- FIM EDICAO DOS DADOS DA ESCOLA -->







      </section>
      <!-- /wrapper -->
    </section>











 
