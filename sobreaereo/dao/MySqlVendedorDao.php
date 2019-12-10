<?php
/////////////////////falta ajustar
include_once('VendedorDao.php');
include_once('MySQLDAO.php');
include_once('MySqlDaoFactory.php');
class MySqlVendedorDao extends MySQLDAO implements VendedorDao {

    private $table_name = 'vendedor';
    
    public function insere($vendedor) 
    {
        $nome = mysqli_real_escape_string($this->conn,  $vendedor->getNome());
        $email = mysqli_real_escape_string($this->conn,  $vendedor->getEmail());
        $cpf = mysqli_real_escape_string($this->conn,  $vendedor->getCpf());
        $fone = mysqli_real_escape_string($this->conn,  $vendedor->getFone());
        $lojaNome = mysqli_real_escape_string($this->conn,  $vendedor->getLojaNome());
        $lojaRazaoSocial = mysqli_real_escape_string($this->conn,  $vendedor->getLojaRazaoSocial());
        $lojaEmail = mysqli_real_escape_string($this->conn,  $vendedor->getLojaEmail());
        $lojaCnpj = mysqli_real_escape_string($this->conn,  $vendedor->getLojaCnpj());
        $lojaFone = mysqli_real_escape_string($this->conn,  $vendedor->getLojaFone());
        $cep = mysqli_real_escape_string($this->conn,  $vendedor->getCep());
        $estado = mysqli_real_escape_string($this->conn,  $vendedor->getEstado());
        $cidade = mysqli_real_escape_string($this->conn,  $vendedor->getCidade());
        $rua = mysqli_real_escape_string($this->conn,  $vendedor->getRua());
        $nroComplemento = mysqli_real_escape_string($this->conn,  $vendedor->getNroComplemento());

        $query = "INSERT INTO " . $this->table_name . 
        " (nome, email, cpf, fone, lojaNome, lojaRazaoSocial, lojaEmail, lojaCnpj, lojaFone, cep, estado, cidade, rua, nroComplemento) ".
        "VALUES ('{$nome}','{$email}','{$cpf}','{$fone}','{$lojaNome}','{$lojaRazaoSocial}','{$lojaEmail}','{$lojaCnpj}','{$lojaFone}','{$cep}',". 
        "'{$estado}','{$cidade}','{$rua}','{$nroComplemento}')";

        $result = mysqli_query($this->conn, $query);
        echo $result;
    }

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

    public function remove($vendedor) {
        //return removePorId($vendedor->getId());
    }

    public function altera(&$vendedor) {

        $query = "UPDATE " . $this->table_name . 
        " SET login = :login, senha = :senha, nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(":login", $vendedor->getLogin());
        $stmt->bindParam(":senha", md5($vendedor->getSenha()));
        $stmt->bindParam(":nome", $vendedor->getNome());
        $stmt->bindParam(':id', $vendedor->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorId($id) {
        
        $vendedor = null;

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
          //  $vendedor = new Vendedor($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $vendedor;
    }

    public function buscaPorLogin($login) {

        $vendedor = null;

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
        //    $vendedor = new Vendedor($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $vendedor;
    }

}
?>
