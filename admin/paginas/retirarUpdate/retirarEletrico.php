<!-- MODAL DO RETIRAR-->
<div class="modal fade bd-example-modal-sm"  id="retirUpdate<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Editar produto</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
    <form method="post" action="paginas/retirarDados/retirarEletrico.php">

 
         <div style="margin-left: 7%; " class="form-group">
            <label class="col-form-label">Quantidade:</label>
            
            <input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>

            <input type="hidden" name="nome" value="<?php echo $fetch['nome']?>"/>

            <input type="hidden" name="qtdProduto" value="<?php echo $fetch['qtdProduto']?>"/>

            <input type="hidden" name="Pretirados" value="<?php echo $fetch['Pretirados']?>"/>

            <input  name="r"  type="text" class="form-control" placeholder="Quantidade de produtos...">
          </div>

      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> 
            <button type="submit"  name="botaoR" class="btn btn-warning">Retirar</button>
      </div>

</form>


        </div>

    </div>
</div>

<!-- FIM MODAL DO RETIRAR-->