<?php
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Sistema/Site <?php echo $sistema['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Sistema/Site:</dt>
	<dd><?php echo $sistema['name']; ?></dd>

	<dt>Senha:</dt>
	<dd><?php echo $sistema['password']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $sistema['created']; ?></dd>
</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $sistema['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
