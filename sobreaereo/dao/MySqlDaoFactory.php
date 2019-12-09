<?php

include_once('DaoFactory.php');
include_once('MySqlProdutoDao.php');

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'sobreaereo_db');
class MySqlDaoFactory extends DaoFactory 
{

    public $conexao;
  
    public function getConnection()
    {
        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
        
        // or die ('Não foi possível conectar');
        //why dont u wanna die?
        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        }
        return $this->conexao;
    }

    public function getProdutoDao()
     {
        return new MySqlProdutoDao($this->getConnection());
    }
}
?>

