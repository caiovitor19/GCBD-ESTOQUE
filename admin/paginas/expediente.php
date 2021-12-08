

   <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Material de Expediente</h3>

        <button style="margin-left:93%;" id="adicionarNOVO" type="button" class="btn btn-theme"  data-toggle="modal" data-target="#form_modal" data-whatever="@fat"> <i class="fa fa-plus-square-o" 
       ></i>  Novo
        </button>

      


        <div class="modal fade"  id="form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
				<form method="POST" action="paginas/adicionarDados/adicionarExpediente.php">
					
				


              <div class="form-group">
            <label for="" class="col-form-label">Nome:</label>
            <input name="nome" type="text" class="form-control" placeholder="Digite o nome do produto...">
              </div>

          


              <div class="form-group">
							<label>Quantidade de produtos:</label>
							<input type="text" name="qtdProduto"  class="form-control" required="required" placeholder="Digite a quantidade de produtos..." />
						</div>

						
              <input type="hidden" name="Pretirados" value="0">


              <div class="form-group">
              <label class="col-form-label">Quantidade miníma de produtos</label>
              <select style="width:250px; font-size: 13px" name="qtdMinima"  class="form-control">
                <option value="" disabled="" selected="">Selecione a quantidade</option>
                <option value="05">05</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
              </select>
               </div>



						
					<div style="clear:both;"></div>


       
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> 
        <button type="submit"  name="AdicionarExpediente" class="btn btn-warning">Adicionar</button>
      </div>
        
				
				</form>
        </div>

    </div>
  </div>
</div>
        

    
                          
    <table class="table table-striped" id="minhaTabela">
                                  <thead>
                                    <tr>
                                      <th>Nome</th>
                                      <th>Quantidade de produtos</th>
                                      <th>Quantidade minima</th>
                                       <th>Deletar</th>
                                       <th>Retirar</th>
                                      <th>Editar</th>
                                    </tr>
                                  </thead>

                                  <tbody>

                        <?php
                          require 'conn.php';
                          $query = mysqli_query($conn, "SELECT * FROM `mexpediente`") or die(mysqli_error());
                          while($fetch = mysqli_fetch_array($query)){
                        ?>

                                    <tr>
                                      <td><?php echo $fetch['nome']?></td>
                                      <td><?php echo $fetch['qtdProduto']?></td>
                                      <td><?php echo $fetch['qtdMinima']?></td>

                                        <td><a href="paginas/delete/deleteExpediente.php?deletar=<?php echo $fetch['id']?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar o Registro')"><i class="fa fa-trash-o"></i></a></td>

                                        <td><button id="adicionarNOVO" type="button" class="btn btn-warning"  data-toggle="modal" data-target="#retirUpdate<?php echo $fetch['id']?>"> <i class="fa fa-minus-square-o"></i></button></td>

                                      <td><button class="btn btn-success" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['id']?>"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                      <?php
                        
                        include 'modal_update/modalExpediente.php';
                         include 'retirarUpdate/retirarExpediente.php';
                          };
                        
                      ?>
                                    </tbody>

     </table>
         



<form method="post" action="paginas/PDF/expedientePDF.php"  >
  



                      <div class="col-md-12 detailed">
                        <h4>GERAR RELATÓRIO EM PDF</h4>
                        <div class="row centered mt mb">

                         <div class="col-sm-3">

                   <div class="form-group">  

                      <div class="form-inline">
                        <div class="form-group mx-2">
                           <div class=input-group>
                            <input class=form-control name="data1" type="date">
                            <span style="background: #4ECDC4; color: #fff;"  class=input-group-addon> <i class="fa fa-calendar"></i> </span> 

                           </div>
                        </div>
                      </div>

                    </div>



                          </div>



                          <div class="col-sm-1">
                            <h6>ATÉ</h6>

                          </div>



                        <div class="col-sm-3">
                             <div class="form-group">                     
                      <div class="form-inline">
                        <div class="form-group mx-2">
                           <div class=input-group>
                            <input class=form-control name="data2" type="date">
                            <span style="background: #4ECDC4; color: #fff;"  class=input-group-addon> <i class="fa fa-calendar"></i> </span> 

                           </div>
                        </div>
                      </div>
              </div>
                           
                        </div>



<div class="col-sm-3">

        <div class="form-group">
        <button type="submit" name="BOTAOeletrico" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button>
        </div>

</div>

                        </div> 

                        </div>
                        <!-- /row   -->



</form>

<?php
 include 'paginas/PDF/conexao/conexaoexpediente.php'

?>

<div style="margin-top: %;" class="col-sm-6">

<?php
            
              if (isset($_GET['acao'])) {
                
                  $acao = $_GET['acao'];
                  if ($acao == 'expediente2') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>NÃO HÁ DADOS NESSE ESPAÇO DE TEMPO INFORMADO!</div>';

                  }
                    }

?>
</div>




      </section>
    </section>











