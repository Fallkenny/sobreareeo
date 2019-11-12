<?php

include_once('UsuarioDao.php');
include_once('PostgresDao.php');

class PostgresUsuarioDao extends PostgresDao implements UsuarioDao {

    private $table_name = 'usuario';
    
    public function insere($usuario) {

        $query = "INSERT INTO " . $this->table_name . 
        " (login, senha, nome) VALUES" .
        " (:login, :senha, :nome)";

        $stmt = $this->conn->prepare($query);

        // bind values 
        $stmt->bindParam(":login", $usuario->getLogin());
        $stmt->bindParam(":senha", md5($usuario->getSenha()));
        $stmt->bindParam(":nome", $usuario->getNome());

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function removePorId($id) {
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

    public function remove($usuario) {
        return removePorId($usuario->getId());
    }

    public function altera(&$usuario) {

        $query = "UPDATE " . $this->table_name . 
        " SET login = :login, senha = :senha, nome = :nome" .
        " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // bind parameters
        $stmt->bindParam(":login", $usuario->getLogin());
        $stmt->bindParam(":senha", md5($usuario->getSenha()));
        $stmt->bindParam(":nome", $usuario->getNome());
        $stmt->bindParam(':id', $usuario->getId());

        // execute the query
        if($stmt->execute()){
            return true;
        }    

        return false;
    }

    public function buscaPorId($id) {
        
        $usuario = null;

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
            $usuario = new Usuario($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $usuario;
    }

    public function buscaPorLogin($login) {

        $usuario = null;

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
            $usuario = new Usuario($row['id'],$row['login'], $row['senha'], $row['nome']);
        } 
     
        return $usuario;
    }

    public function buscaPorNomeCom($palavra) {
        
 	$usuarios = array();        
	
        $query = "SELECT
                    id, login, nome, senha
                FROM
                    " . $this->table_name . "
                WHERE
                    nome like ? ORDER BY id ASC";
     
        $stmt = $this->conn->prepare($query);
	    $parametro = "%" . $palavra . "%";
        $stmt->bindParam(1, $parametro);
        $stmt->execute();
     
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($id,$login,$senha,$nome);
        }
	
        return $usuarios;
    }

    public function buscaJSONPorNomeCom($palavra) {
        $usuarios = $this->buscaPorNomeCom($palavra);
        $usuariosJSON = array();
        foreach ($usuarios as $usuario) {
            $usuariosJSON[] = $usuario->getDadosParaJSON();
        }
        return stripslashes(json_encode($usuariosJSON,JSON_PRETTY_PRINT));
    }

    public function contaTodos() {

        $quantos = 0;

        $query = "SELECT COUNT(*) AS contagem FROM " . 
                    $this->table_name;
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $quantos = $contagem;
        }
        
        return $quantos;
    }

    public function buscaTodos() {

        $usuarios = array();

        $query = "SELECT
                    id, login, senha, nome
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($id,$login,$senha,$nome);
        }
        
        return $usuarios;
    }

    public function buscaTodosPaginado($inicio,$quantos) {
        $usuarios = array();

        $query = "SELECT
                    id, login, senha, nome
                FROM
                    " . $this->table_name . 
                    " ORDER BY id ASC" .
                    " LIMIT ? OFFSET ?";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $quantos);
        $stmt->bindParam(2, $inicio);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $usuarios[] = new Usuario($id,$login,$senha,$nome);
        }
        
        return $usuarios;
    }

    public function buscaTodosPaginadoJSON($inicio,$quantos) {
        $usuarios = $this->buscaTodosPaginado($inicio,$quantos);
        $usuariosJSON = array();
        foreach ($usuarios as $usuario) {
            $usuariosJSON[] = $usuario->getDadosParaJSON();
        }
        return stripslashes(json_encode($usuariosJSON,JSON_PRETTY_PRINT));
    }
}
?>
