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
            <?php if (!empty($searchfield)) { ?>
                <h1 class="titulo3">Resultados p/ "<?php echo $searchfield?>"</h1>
            <?php } else { ?>
                <h1 class="titulo3">Galeria de produtos</h1>
            <?php } ?>


            <p class="numProdutos"><?php echo $count_produtos?> produto(s) encontrado(s)</p>
        </div>
    </section>
    <section class="destaques">
        <div class="container">
            <div class="gridProdutos">
                <?php 
                    
                    foreach ($produtos as $p) {
                        $foto = 'img_database/'.$p["imagem_main"];
                        $titulo = $p["descricao"];
                        $link = "produto/". $p["produto_id"];
                        $preco = $p["preco"];

                        require('includes/elements/card-produto.php');
                    }
                ?>
            </div>

        </div>
    </section>




    
</main>