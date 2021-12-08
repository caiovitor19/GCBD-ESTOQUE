<div class="modal fade bd-exemplo-modal-sm" id="update_modal<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEDitar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: left;" class="modal-title" id="exampleModalLabelEDitar">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form  method="POST"  action="paginas/update/updateConfig.php">

         <div class="form-group">
              <label style="width:560px; text-align: left;" class="col-form-label">Nivel de acesso:</label>
              <input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>
              <select style="width:250px; font-size: 13px" name="status"  class="form-control">
                <option value="" disabled="" selected="">Selecione o nível</option>
                <option  value="0">Acesso negado</option>
                <option value="1">Usuário Comum</option>
                <option value="2">Administrador(a)</option>
              </select>
          </div>

          

        

          <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" name="botaoConfig" class="btn btn-info">Salvar mudanças</button>
          </div>

</form>
      
      
      
    </div>
  </div>
</div>                
</div> 
