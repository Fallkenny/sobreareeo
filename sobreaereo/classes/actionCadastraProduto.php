<?php

session_start();

include('model/Produto.php');
include('../dao/MySqlDaoFactory.php');
if(empty($_POST['descricao-produto'])) {
	header('Location: cadastro-produtos.php');
	exit();
}

$descricao =$_POST['descricao-produto'];
$categoria =$_POST['categoria-produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$detalhes = $_POST['preco'];
$imagens = $_FILES['foto1'];

 $target_dir = "../img_database/";

 $extension = pathinfo($_FILES["foto1"]["name"], PATHINFO_EXTENSION); 
 
$mainImageGuid = trim(com_create_guid(), '{}');

 $_FILES["foto1"]["name"] = $mainImageGuid   ."." . $extension;

 $target_file = $target_dir . basename($_FILES["foto1"]["name"]);

 echo $_FILES["foto1"]["name"];
 echo $target_file;
 
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Check if image file is a actual image or fake image
$check = getimagesize($_FILES["foto1"]["tmp_name"]);

if($check !== false) 
{	
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
}
else 
{
	$uploadOk = 0;
}

if ($uploadOk == 1)
{
	move_uploaded_file($_FILES["foto1"]["tmp_name"],$target_file);
	//copy($_FILES["foto1"]["tmp_name"],$target_file );
}


$vendedor = $_SESSION['user_ID'];

$produto = new Produto(null, $descricao, $categoria, $marca,$preco,$vendedor, $detalhes, $mainImageGuid );
$factory = new MySqlDaoFactory();
$dao = $factory->getProdutoDao();
$dao->insere($produto);


header('Location: ../lista-produtos');
	exit();
?>