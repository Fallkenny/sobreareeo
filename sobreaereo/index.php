<?php

// $_SESSION['autenticado'] = false;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$_GET['param1'] = (isset($_GET['param1'])) ? $_GET['param1'] : "home";
$_GET['param2'] = (isset($_GET['param2'])) ? $_GET['param2'] : null;
$_GET['param3'] = (isset($_GET['param3'])) ? $_GET['param3'] : null;
$_GET['param4'] = (isset($_GET['param4'])) ? $_GET['param4'] : null;



include ("includes/header.php");

$file = "includes/pages/".$_GET['param1'].".php";

if(file_exists($file)){
    include($file);
}else{
    include("includes/pages/404.php");
}

include ("includes/footer.php");

?>