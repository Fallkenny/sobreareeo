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

        $result = mysqli_query($this->conn, $query);

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

    // TODO: daqui pra baixo
    public function removePorId($id) 
    {
        $query = "DELETE FROM " . $this->table_name . 
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(':id', $id);

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function remove($produto) {
        //return removePorId($produto->getId());
    }

    public function altera(&$produto) {

        $query = "UPDATE " . $this->table_name . 
        " SET login = :login, senha = :senha, nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(":login", $produto->getLogin());
        $stmt->bindParam(":senha", md5($produto->getSenha()));
        $stmt->bindParam(":nome", $produto->getNome());
        $stmt->bindParam(':id', $produto->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorId($id) {
        
        $produto = null;

        $query = "SELECT
                    id, login, nome, senha
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
          //  $produto = new Produto($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $produto;
    }

    public function buscaPorLogin($login) {

        $produto = null;

        $query = "SELECT
                    id, login, nome, senha
                FROM
                    " . $this->table_name . "
                WHERE
                    login = ?
                LIMIT
                    1 OFFSET 0";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $login);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row) {
        //    $produto = new Produto($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $produto;
    }


}
?>
