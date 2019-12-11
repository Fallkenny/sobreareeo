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
                        <?php if (isset($_SESSION['autenticado']) || $_SESSION['autenticado']) { ?>
                            <button onclick="ajaxCarrinho(<?= $produto_id.', false'?>)" class="btn btn2"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Adicionar ao carrinho</button>
                        <?php } else { ?>
                            <p>Faça login para acessar o carrinho</p>
                        <?php }?>
                        <button onclick="ajaxCarrinho(<?= $produto_id.', true'?>)" class="btn"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Comprar agora</button>
                    </div>
                </div>
            </div>
            <div class="produto-informacoes texto">
                <?= $detalhes?>
            </div>
        </div>
    </section>


</main>

<script>

    function ajaxCarrinho(id, comprarAgora) {
        $.ajax({
            url: 'classes/Carrinho.php',
            data: {
                funcao: 'adicionaCarrinho',
                produto_id: id,
            },
            type: 'post',
            success: function(output) {
                alert('Produto adicionado ao carrinho!');
                if (comprarAgora) {
                    window.location = "./cart"
                } else {
                    window.location = "./galeria"
                }

            }
        })
    }



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