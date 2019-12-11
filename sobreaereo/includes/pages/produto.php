<?php 
    include('dao/MySqlProdutoDao.php');
    $factory = new MySqlDaoFactory();
    $dao = $factory->getProdutoDao();
    

    $produto_id = $_GET["param2"];

    $produto = $dao->buscaPorId($produto_id);
    

    $titulo = $produto['descricao'];
    $preco =  "R$ ".$produto['preco'];
    $detalhes = $produto['detalhes'];


    $fotosArray = $dao->buscaFotos($produto_id);

    $fotos = array();
    foreach ($fotosArray as &$photo)
    {
        array_push ($fotos, "img_database/".$photo['imagem_id']);
    }
    //array_push ($fotos, "img_database/".$produto['imagem_main']);
    $vendedor = "Frank El Primo";

    
?>

<main id="produto">
    <section class="produto">
        <div class="container">
            <div class="produto-resumo">
                <div class="carrossel produto-fotos">
                    <div class="carrossel-main">
                        <?php foreach ($fotos as $f) { ?>
                            <div class="carrossel-item">
                                <img src="<?= $f?>" alt="<?= $titulo ?> | Sobreaéreo Shop">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="carrossel-thumbs">
                        <?php foreach ($fotos as $f) { ?>
                            <div class="carrossel-item">
                                <img src="<?= $f?>" alt="<?= $titulo ?> | Sobreaéreo Shop">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="produto-detalhes">
                    <h1 class="titulo2"><?= $titulo ?></h1>
                    <p class="vendedor">Vendido e entregue por: <a href="galeria"><?= $vendedor ?></a></p>
                    <p class="produto-detalhes__preco"><?= $preco ?></p>
                    <p class="produto-detalhes__desconto">5% de desconto no boleto!</p>
                    <div class="botoes">
                        <a href="cart" class="btn btn2"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Adicionar ao carrinho</a>
                        <a href="checkout" class="btn">Comprar agora&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="produto-informacoes texto">
                <?= $detalhes?>
            </div>
        </div>
    </section>

    <!-- <section class="produtos-relacionados">
        <div class="container">
            <h2 class="titulo3">As pessoas também compraram</h2>
            <div class="gridProdutos">
                <?php 
                    $produtos = [
                        [
                            "foto" => "img/front/livro1.jpg",
                            "titulo" => "Este livro não vai te deixar rico",
                            "link" => "produto",
                            "preco" => "R$ 34,99"
                        ],
                        [
                            "foto" => "img/front/livro2.jpg",
                            "titulo" => "Sociedade do Cansaço",
                            "link" => "produto",
                            "preco" => "R$ 14,99"
                        ],
                        [
                            "foto" => "img/front/livro3.jpg",
                            "titulo" => "Amores impossíveis e outras perturbações quânticas",
                            "link" => "produto",
                            "preco" => "R$ 34,99"
                        ],
                        [
                            "foto" => "img/front/videogame1.jpg",
                            "titulo" => "Nintendo Switch",
                            "link" => "produto",
                            "preco" => "R$ 1.899,99"
                        ]
                    ];

                    foreach ($produtos as $p) {
                        $foto = $p["foto"];
                        $titulo = $p["titulo"];
                        $link = $p["link"];
                        $preco = $p["preco"];

                        require('includes/elements/card-produto.php');
                    }
                ?>
            </div>
        </div>
    </section> -->

</main>

<script>
    $(document).ready(function(){
        $('.carrossel-main').slick({
            slidesToShow: 1,
            fade: true,
            dots: false,
            arrows: true,
            infinite: true,
            prevArrow: '<button class="seta seta-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="seta seta-next"><i class="fas fa-chevron-right"></i></button>',
            asNavFor: '.carrossel-thumbs'
        });
        $('.carrossel-thumbs').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            fade: false,
            dots: false,
            arrows: false,
            asNavFor: '.carrossel-main',
            focusOnSelect: true
        });
        
    })

</script>