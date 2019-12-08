<?php

session_start();
include('conexao.php');

if(empty($_POST['descricao-produto'])) {
	header('Location: cadastro-produtos.php');
	exit();
}

$descricao =$_POST['descricao-produto'];
$categoria =$_POST['categoria-produto'];
$marca =  $_POST['marca'];
$preco =  $_POST['preco'];
$detalhes =   $_POST['preco'];
$imagens=   $_POST['foto1'];

$vendedor = $_SESSION['userEmail'];

$produto = new Produto(null, $descricao, $categoria, $marca,$preco, $detalhes, $imagens );

$dao = $factory->getProdutoDao();
$dao->insere($usuario);

$query = "insert into produto * from login where username = '{$usuario}' and password = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

$data = mysqli_fetch_assoc($result);

// var_dump($data);
// die();
