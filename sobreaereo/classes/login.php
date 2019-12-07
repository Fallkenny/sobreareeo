<?php

session_start();
include('conexao.php');

if(empty($_POST['userEmail']) || empty($_POST['userLoginPassword'])) {
	header('Location: ../index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['userEmail']);
$senha = mysqli_real_escape_string($conexao, $_POST['userLoginPassword']);

$query = "select * from login where username = '{$usuario}' and password = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

$data = mysqli_fetch_assoc($result);

// var_dump($data);
// die();

if($row == 1) {
	$_SESSION['userEmail'] = $usuario;
	$_SESSION['userType'] = $data['user_type'];
	$_SESSION['autenticado'] = true;


	// admin
	if ($data['user_type'] == 'A') {
		header('Location: ../lista-vendedores');
	}

	// vendedor
	if ($data['user_type'] == 'V') {
		header('Location: ../lista-produtos');
	}

	// cliente
	if ($data['user_type'] == 'C') {
		header('Location: ../cart');
	}

	exit();
} else {
	$_SESSION['autenticado'] = false;
	header('Location: ../');
	exit();
}
