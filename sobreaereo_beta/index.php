<?php

// include("admin/class/Connection.class.php");
// include("admin/class/functions.php");

// contador();


$_GET['param1'] = (isset($_GET['param1'])) ? $_GET['param1'] : "home";
$_GET['param2'] = (isset($_GET['param2'])) ? $_GET['param2'] : null;
$_GET['param3'] = (isset($_GET['param3'])) ? $_GET['param3'] : null;
$_GET['param4'] = (isset($_GET['param4'])) ? $_GET['param4'] : null;

// var_dump($_GET['param1']);
// var_dump($_GET['param2']);
// var_dump($_GET['param3']);

// echo '<script>window.history.go(-1)"</script>';
  
  // $contato = Connection::getInstance()->query("SELECT * FROM contato WHERE id = 1 ")->fetch();
  // $configuracoes = Connection::getInstance()->query("SELECT * FROM configuracoes WHERE id = 1 ")->fetch();

// include ("includes/lang.php");
include ("includes/header.php");

$file = "includes/pages/".$_GET['param1'].".php";

if(file_exists($file)){
    include($file);
}else{
    include("includes/pages/404.php");
}

include ("includes/footer.php");

?>