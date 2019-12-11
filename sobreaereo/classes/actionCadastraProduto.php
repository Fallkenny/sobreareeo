<?php

function uploadImage($receivedKey)
{
	$target_dir = "../img_database/";
	

	$extension = pathinfo($_FILES["fotos"]["name"][$receivedKey], PATHINFO_EXTENSION); 

	$mainImageGuid = trim(com_create_guid(), '{}');

	 $_FILES["fotos"]["name"][$receivedKey] = $mainImageGuid   ."." . $extension;

	 $target_file = $target_dir . basename($_FILES["fotos"]["name"][$receivedKey]);

	 //echo $_FILES["fotos"]["name"][$receivedKey];
	 //echo $target_file;
	
	 $uploadOk = 1;
	 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	 // Check if image file is a actual image or fake image
	
	
	
	 $check = getimagesize($_FILES["fotos"]["tmp_name"][$receivedKey]);

	////////////
	if($check !== false) 
	{	
	    //echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	}
	else 
	{
		$uploadOk = 0;
	}

	if ($uploadOk == 1)
	{
		move_uploaded_file($_FILES["fotos"]["tmp_name"][$receivedKey],$target_file);	
	}

	return $mainImageGuid;
}

session_start();


include('model/Produto.php');
include('../dao/MySqlDaoFactory.php');


if(empty($_POST['descricao-produto'])) 
{
	header('Location: ../includes/pages/cadastro-produtos.php');
	exit();
}

$descricao =$_POST['descricao-produto'];

echo $descricao;

$categoria =$_POST['categoria-produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$detalhes = $_POST['preco'];

$settedFirst = false;
$mainImageGuid = "";
$guids = array();
foreach($_FILES['fotos']['name'] as $key=>$val)
{
	//echo $fileName = basename($_FILES['fotos']['name'][$key]);
	$guid = uploadImage($key);
	array_push($guids, $guid);
	if($settedFirst == false)
	{
		$mainImageGuid = $guid ;
		$settedFirst = true;
	}	
}


$vendedor = $_SESSION['user_ID'];

$factory = new MySqlDaoFactory();


$nextIdQuery = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_NAME = 'produto'";



$result = mysqli_query( $factory->getConnection(), $nextIdQuery);

$productNextID = mysqli_fetch_assoc($result)['AUTO_INCREMENT'];

$produto = new Produto($productNextID, $descricao, $categoria, $marca,$preco,$vendedor, $detalhes, $mainImageGuid );
$dao = $factory->getProdutoDao();
$rsultado = $dao->insere($produto);



if($rsultado)
{
	foreach($guids as &$id)
	{
		$_id = mysqli_real_escape_string($factory->getConnection(),  $id);
		$_prodId = mysqli_real_escape_string($factory->getConnection(),  $productNextID);
		// echo $_id;
		// echo '             ';
		// echo $_prodId;
		// echo '             ';
		$query = "INSERT INTO ".'imagem_produto'. "(imagem_id, produto_id) VALUES ('{$_id}', '{$_prodId}')";
		mysqli_query( $factory->getConnection(), $query);	

	}
}

header('Location: ../lista-produtos');
	exit();
?>