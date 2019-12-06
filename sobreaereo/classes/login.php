<?php
session_start();
include('conexao.php');

if(empty($_POST['userEmail']) || empty($_POST['userLoginPassword'])) {
	header('Location: ../index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['userEmail']);
$senha = mysqli_real_escape_string($conexao, $_POST['userLoginPassword']);

$query = "select username from login where username = '{$usuario}' and password = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['userEmail'] = $usuario;
	header('Location: ../includes/pages/cart.php');#apenas direcionando pra outro lugar como um teste
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}
