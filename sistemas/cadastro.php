<?php
  require_once('functions.php');
  add_user();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login</title><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>

<body>

  <form action="cadastro.php" method="post">

  <div class="login">
  <form>
    <div class="form-group">
      <label>Login</label>
      <input type="text" class="form-control" id="login" name= "usuario['login']" placeholder="login">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="senha" name= "usuario['senha']" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirmar Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <script>
    function alerta()
    {
      alert('Cadastro efetuado com sucesso :) Clique em "OK" para prosseguir!');
    }
    </script>
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" onclick="alerta()" class="btn btn-success">Cadastrar</button>
        <a href="../index.php" class="btn btn-danger">Cancelar</a>
      </div>
    </div>

    <h1> Informe seus dados </h1>
  </form>
</div>
</body>

</html>
