<h2>Editar Periodo</h2>

<form action="?r=periodos&f=save" method="POST">
  <div class="form-group">
    <label for="Periodo">Periodo:</label>
    <input type="text" class="form-control" name="periodo" value="<?php echo $periodos->getDescricao(); ?>">
    <input type="hidden" value="<?php echo $periodos->getId(); ?>">
    
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
