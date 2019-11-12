<?php

include_once "fachada.php";

// procura usuários

$inicio = @$_GET['inicio'];
$quantos = @$_GET['quantos'];

$dao = $factory->getUsuarioDao();

echo $dao->buscaTodosPaginadoJSON($inicio,$quantos)

?>