<?php
session_start();
include('conexao.php');

if(empty($_POST['userEmail']) || empty($_POST['userLoginPassword'])) {
	header('Location: sobreaereo/index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['userEmail']);
$senha = mysqli_real_escape_string($conexao, $_POST['userLoginPassword']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
echo $query;
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['userEmail'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
