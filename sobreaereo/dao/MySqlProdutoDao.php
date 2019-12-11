<?php
/////////////////////falta ajustar
include_once('ProdutoDao.php');
include_once('MySQLDAO.php');
include_once('MySqlDaoFactory.php');
class MySqlProdutoDao extends MySQLDAO implements ProdutoDao {

    private $table_name = 'produto';
    
    public function insere($produto) 
    {
        $descricao = mysqli_real_escape_string($this->conn,  $produto->getDescricao());
        $categoria= mysqli_real_escape_string($this->conn,  $produto->getCategoria());
        $marca= mysqli_real_escape_string($this->conn,  $produto->getMarca());
        $preco= mysqli_real_escape_string($this->conn,  $produto->getPreco());
        $detalhes= mysqli_real_escape_string($this->conn,  $produto->getDetalhes());
        $imagens= mysqli_real_escape_string($this->conn,  $produto->getImagens());
        $vendedor= mysqli_real_escape_string($this->conn,  $produto->getVendedor());

        $query = "INSERT INTO " . $this->table_name . 
        " (descricao, categoria, marca, preco, detalhes,vendedor_id,imagem_main) VALUES ('{$descricao}','{$categoria}','{$marca}','{$preco}', '{$detalhes}','{$vendedor}', '{$imagens}')";

        // var_dump($query);
        // die($query);
        $result = mysqli_query($this->conn, $query);
        return $result;
    }



    public function buscaPorVendedor($vendedor_id) {

        $query = "SELECT * FROM produto WHERE vendedor_id =".$vendedor_id;
        $result = mysqli_query($this->conn, $query);
        $arr = null;

        if ($result) {
            $arr = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            mysqli_free_result($result);
        }
    
        return $arr;
    }

    public function buscaFotos($produto_id) 
    {
        $query = "SELECT * FROM imagem_produto WHERE produto_id =".$produto_id;
        $result = mysqli_query($this->conn, $query);
        $arr = null;
        
        if ($result) {
            $arr = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            mysqli_free_result($result);
        }
    
        return $arr;
    }

    public function buscaPorId($produto_id) {

        $query = "SELECT * FROM produto WHERE produto_id =".$produto_id;
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $imagens_galeria = $this->buscaFotos($produto_id);
            if ($imagens_galeria)
                array_push($row, $imagens_galeria);
        }
    
        return $row;
    }

    public function buscaPorNome($palavra)
    {
        $arr = null;
        $query = "SELECT * FROM produto WHERE descricao like '%" .$palavra ."%'";

        $result = mysqli_query($this->conn, $query);
        if ($result) {
            $arr = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            mysqli_free_result($result);
        }
        return $arr;
    }

    public function buscaTodos($limit = false) {
        $arr = null;
        $query = "SELECT * FROM produto";
        if ($limit)
            $query = $query.' LIMIT '.$limit;

        $result = mysqli_query($this->conn, $query);
        if ($result) {
            $arr = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            mysqli_free_result($result);
        }
        return $arr;
    }

    // TODO: daqui pra baixo
    public function remove($id) 
    {
        return false;
    }

    public function altera(&$produto) {
        return false;
    }



}
?>
