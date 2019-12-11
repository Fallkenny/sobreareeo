<?php

session_start();

if ($_SESSION['autenticado']) {
	unset($_SESSION['userEmail']);
	unset($_SESSION['userType']);
	unset($_SESSION['autenticado']);
	unset($_SESSION["carrinho_ids"]);
}


// var_dump($_SESSION['userType']);
// die();

header('Location: ../');
exit();

