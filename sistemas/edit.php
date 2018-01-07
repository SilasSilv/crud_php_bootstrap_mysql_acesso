<?php
  require_once('functions.php');
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar password</h2>

<form action="edit.php?id=<?php echo $sistema['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Sistema/Site</label>
      <input type="text" class="form-control" name="sistema['name']" value="<?php echo $sistema['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Password</label>
      <input type="text" class="form-control" name="sistema['password']" value="<?php echo $sistema['password']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="sistema['created']" disabled value="<?php echo $sistema['created']; ?>">
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
