<div class="modal fade bd-exemplo-modal-sm" id="update_modal<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEDitar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelEDitar">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

	  <form method="POST" action="paginas/update/updateEletrico.php">
			
		
						<div class="form-group">
							<label>Nome</label>
							<input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>
							<input type="text" name="nome" value="<?php echo $fetch['nome']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Quantidade de produtos</label>
							<input type="text" name="qtdProduto" value="<?php echo $fetch['qtdProduto']?>" class="form-control" required="required" />
						</div>
						         <div class="form-group">
              <label class="col-form-label">Quantidade miníma de produtos</label>
              <select  style="width:250px; font-size: 13px" name="qtdMinima"  class="form-control">
                <option value="<?php echo $fetch['qtdMinima']?>"> <?php echo $fetch['qtdMinima']?> </option>
                <option value="5">05</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
              </select>
               </div>
					
				<div class="modal-footer">
					
					<button class="btn btn-secondary" type="button" data-dismiss="modal"> Fechar</button>
					<button name="update" class="btn btn-warning" > Salvar mudanças</button>
				</div>
				</div>
			</form>
      
			
			
    </div>
  </div>
</div> 
</div> 













