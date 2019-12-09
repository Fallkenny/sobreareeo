<?php
interface ProdutoDao {

    public function insere($produto);
    public function remove($produto);
    /*
    public function removePorId($id);
    public function altera(&$produto);
    public function buscaPorId($id);
    public function buscaPorVendedor($vendedor);
    public function buscaPorNomeCom($palavra);
    public function buscaJSONPorNomeCom($palavra);
    public function buscaTodos();
    public function contaTodos();
    public function buscaTodosPaginado($inicio,$quantos);
    public function buscaTodosPaginadoJSON($inicio,$quantos);
    */
}
?>
