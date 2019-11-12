<?php

include_once "fachada.php";

// procura usuários

$palavra = $_POST['palavra'];

$dao = $factory->getUsuarioDao();

echo $dao->buscaJSONPorNomeCom($palavra);

?>