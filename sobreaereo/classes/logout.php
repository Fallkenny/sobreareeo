<?php

session_start();

if ($_SESSION['autenticado']) {
	unset($_SESSION['userEmail']);
	unset($_SESSION['userType']);
	unset($_SESSION['autenticado']);
}


// var_dump($_SESSION['userType']);
// die();

header('Location: ../');
exit();

