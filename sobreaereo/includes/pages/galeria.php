<?php


$filtro = explode('?', urldecode($_SERVER['REQUEST_URI']));

if (isset($filtro[1])) {
    // pega a querystring, que esta na segunda parte do explode no ?
    $filtro = $filtro[1];
    
    parse_str($filtro, $filtro);
    $searchfield = $filtro["searchinput"]; // essa variavel tem o "teste"
}
else{
    $searchfield = "";
}

    include('dao/MySqlProdutoDao.php');

    $factory = new MySqlDaoFactory();
    $dao = $factory->getProdutoDao();
    $produtos = $dao->buscaPorNome($searchfield);
    $count_produtos = count($produtos);

?>



<main id="galeria">


    <section class="topoPadrao">
        <div class="container">
            <h1 class="titulo3">Resultados p/ "<?php echo $searchfield?>"</h1>
            <p class="numProdutos"><?php echo $count_produtos?> produto(s) encontrado(s)</p>
        </div>
    </section>
    <section class="destaques">
        <div class="container">
            <div class="gridProdutos">
                <?php 
                    
                    foreach ($produtos as $p) {
                        $foto = $p["imagem_main"];
                        $titulo = $p["descricao"];
                        $link = "produto/". $p["produto_id"];
                        $preco = $p["preco"];

                        require('includes/elements/card-produto.php');
                    }
                ?>
            </div>

            <div class="paginacao">
                <button class="paginacao-seta paginacao-prev disabled"><i class="fas fa-chevron-left"></i></button>
                <a href="" class="paginacao-item active">1</a>
                <a href="" class="paginacao-item">2</a>
                <a href="" class="paginacao-item">3</a>
                <a href="" class="paginacao-item disabled">...</a>
                <a href="" class="paginacao-item">8</a>
                <button class="paginacao-seta paginacao-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>




    
</main>