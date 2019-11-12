<?php
interface UsuarioDao {

    public function insere($usuario);
    public function remove($usuario);
    public function removePorId($id);
    public function altera(&$usuario);
    public function buscaPorId($id);
    public function buscaPorLogin($login);
    public function buscaPorNomeCom($palavra);
    public function buscaJSONPorNomeCom($palavra);
    public function buscaTodos();
    public function contaTodos();
    public function buscaTodosPaginado($inicio,$quantos);
    public function buscaTodosPaginadoJSON($inicio,$quantos);
}
?>
