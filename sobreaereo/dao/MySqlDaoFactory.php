<?php

include_once('DaoFactory.php');
include_once('MySqlProdutoDao.php');
include_once('MySqlVendedorDao.php');

// define('HOST', 'localhost');
// define('USUARIO', 'root'); // fischer
define('HOST', '127.0.0.1');
define('USUARIO', 'admin');
define('SENHA', '');
define('DB', 'sobreaereo_db');
class MySqlDaoFactory extends DaoFactory 
{

    public $conexao;
  
    public function getConnection()
    {
        $this->conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
        
        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        }
        return $this->conexao;
    }

    public function getProdutoDao()
    {
        return new MySqlProdutoDao($this->getConnection());
    }
    
    public function getVendedorDao()
    {
        return new MySqlVendedorDao($this->getConnection());
    }
}
?>

