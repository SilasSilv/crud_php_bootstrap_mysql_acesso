<?php
  require_once('functions.php');
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Sistema/Site</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Sistema/Site</label>
      <input type="text" class="form-control" name="sistema['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Password</label>
      <input type="password" class="form-control" name="sistema['password']">
    </div>
    

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="sistema['created']" disabled>
    </div>
  </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
