<h2>Periodos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Periodos</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>

  <?php
  	foreach($periodos as $periodo){
  ?>

    <tr>
      <th scope="row"><?= $periodo->getId(); ?></th>
      <td><?= $periodo->getDescricao(); ?></td>
      <td>
      <div class='ladoladoleft'>
          <a class="btn btn-primary" href="?r=periodos&f=edit&id=<?= $periodo->getId(); ?>" role="button">Editar</a>
      </div>

      <div class='ladoladoleft'>
        <form action='?r=periodos&f=delete'>
        <input type='hidden' name='id' value='<?= $periodo->getId(); ?>'>
        <button type="button" class="btn btn-danger">Excluir</button>
        </form>
      </div>

      </td>
    </tr>

    <?php
	}
    ?>
    
  </tbody>
</table>

<a class="btn btn-primary" href="?r=periodos&f=adicionar" role="button">Adicionar novo</a>

