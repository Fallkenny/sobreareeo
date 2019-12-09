<?php

session_start();
//include('conexao.php');
include('model/Produto.php');
include('../dao/MySqlDaoFactory.php');
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

$produto = new Produto(null, $descricao, $categoria, $marca,$preco, $detalhes, null );
$factory = new MySqlDaoFactory();
$dao = $factory->getProdutoDao();
$dao->insere($produto);

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

$data = mysqli_fetch_assoc($result);

// var_dump($data);
// die();
