<?php 
include('dao/MySqlProdutoDao.php');

$factory = new MySqlDaoFactory();
$dao = $factory->getProdutoDao();
$produtos = $dao->buscaTodos(4);

?>

<main id="home">
    <section class="topo">
        <div class="container">
            <h1 class="titulo">Sobreaéreo</h1>
            <h2 class="subtitulo">Os melhores produtos para os melhores clientes.</h2>
            <button class="btn" onclick="scrollMenu('destaques')">Veja nossos destaques</button>
        </div>
    </section>

    <!-- <section class="promocoes">
        <div class="container">
            <h2 class="titulo2">Promoções</h2>
            <div class="gridPromocoes">
                <a href="galeria" class="gridPromocoes-item">
                    <img src="img/front/promo1.png" alt="Promoções | Sobreaéreo">
                </a>
                <a href="galeria" class="gridPromocoes-item">
                    <img src="img/front/promo2.png" alt="Promoções | Sobreaéreo">
                </a>
                <a href="galeria" class="gridPromocoes-item">
                    <img src="img/front/promo3.png" alt="Promoções | Sobreaéreo">
                </a>
            </div>
        </div>
    </section> -->

    <section class="destaques" id="destaques">
        <div class="container">
            <h2 class="titulo2">Produtos em destaque</h2>
            <div class="gridProdutos">
                <?php 

                    foreach ($produtos as $p) {
                        $foto = "img_database/".$p['imagem_main'];
                        $titulo = $p['descricao'];
                        $link = "produto/".$p['produto_id'];
                        $preco = "R$ ".$p["preco"];

                        require('includes/elements/card-produto.php');
                    }
                ?>
            </div>

            <div style="text-align: center; margin-top: 32px">
                <a href="galeria" class="btn destaques__todos">Ver todos os produtos</a>
            </div>
        </div>
    </section>






    
</main>