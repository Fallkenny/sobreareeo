<?php

session_start();

include('model/Vendedor.php');
include('../dao/MySqlDaoFactory.php');
if(empty($_POST['nome_responsavel'])) {
	header('Location: cadastro-produtos.php');
	exit();
}

$nome = $_POST['nome_responsavel'];
$email= $_POST['email'];
$cpf= $_POST['cpf'];
$fone= $_POST['telefone'];
$lojaNome= $_POST['nome_fantasia'];
$lojaRazaoSocial= $_POST['razao_social'];
$lojaEmail= $_POST['email_loja'];
$lojaCnpj= $_POST['cnpj'];
$lojaFone= $_POST['telefone_loja'];
$cep= $_POST['cep'];
$estado= $_POST['estado'];
$cidade= $_POST['cidade'];
$rua= $_POST['rua'];
$nroComplemento= $_POST['numero_complemento'];

$vendedor = new Vendedor(null,$nome, $email, $cpf, $fone, $lojaNome, $lojaRazaoSocial, $lojaEmail, $lojaCnpj, $lojaFone, $cep, $estado, $cidade, $rua, $nroComplemento);
$factory = new MySqlDaoFactory();
$dao = $factory->getVendedorDao();
$dao->insere($vendedor);


header('Location: ../lista-vendedores');
	exit();
?>