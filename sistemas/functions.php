<?php

require_once('../config.php');
require_once(DBAPI);

$sistemas = null;
$sistema = null;
$usuario = null;
$usuarios = null;

/**
 *  Cadastro de usuario
 */
function add_user() {

  if (!empty($_POST['usuario'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $usuario = $_POST['usuario'];

    save('usuarios', $usuario);
    header('location: ../index.php');
  }
}

/**
 *  Listagem de sistemas
 */
function index() {
	global $sistemas;
	$sistemas = find_all('sistemas');
}

/**
 *  Cadastro de sistemas
 */
function add() {

  if (!empty($_POST['sistema'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $sistema = $_POST['sistema'];
    $sistema['modified'] = $sistema['created'] = $today->format("Y-m-d H:i:s");

    save('sistemas', $sistema);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de sistema
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['sistema'])) {

      $sistema = $_POST['sistema'];
      $sistema['modified'] = $now->format("Y-m-d H:i:s");

      update('sistemas', $id, $sistema);
      header('location: index.php');
    } else {

      global $sistema;
      $sistema = find('sistemas', $id);
    }
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um sistema
 */
function view($id = null) {
  global $sistema;
  $sistema = find('sistemas', $id);
}

/**
 *  Exclusão de um sistema
 */
function delete($id = null) {

  global $sistema;
  $sistema = remove('sistemas', $id);

  header('location: index.php');
}
