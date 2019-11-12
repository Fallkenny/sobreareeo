<?php 
    $titulo = "iPhone X Branco";
    $preco =  "4.599,99";
    $fotos = array("img/front/celular2.png", "img/front/celular2-2.png", "img/front/celular2-3.png", "img/front/celular2-4.png", "img/front/celular2-5.png", "img/front/celular2-6.png");
    $condicoes = "766,65";
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
                    <p class="produto-detalhes__preco">R$ <?= $preco ?></p>
                    <p class="produto-detalhes__condicoes">Em até 6x sem juros de R$ <?= $condicoes ?></p>
                    <p class="produto-detalhes__desconto">5% de desconto no boleto!</p>
                    <div class="botoes">
                        <a href="cart" class="btn btn2"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Adicionar ao carrinho</a>
                        <a href="checkout" class="btn">Comprar agora&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="produto-informacoes texto">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quis accusamus libero, soluta laudantium placeat aliquam ipsam voluptate quia porro possimus autem minima architecto praesentium veritatis reprehenderit? <strong>In, esse accusantium, nulla dolor modi vero totam maxime exercitationem consequatur doloremque eaque!</strong><br/>
                At reprehenderit iste possimus accusamus tempore eum officia sunt animi nostrum sit laudantium ad id repellendus quibusdam repudiandae, ex perferendis voluptatibus? <br/>
                Nisi harum soluta laudantium at rem dolorem sint voluptates quibusdam enim amet pariatur, obcaecati reiciendis necessitatibus! Voluptas quaerat enim culpa, unde, tempora, a cumque fuga nihil quia aliquid recusandae provident doloribus nostrum. <br/>
                Ea, corporis rem facere delectus rerum hic, accusantium inventore praesentium obcaecati perspiciatis tenetur. Nulla, est! Harum perspiciatis dolore ex repellat quod quo minus? Aut totam saepe aliquid consectetur fugit necessitatibus nesciunt architecto facere sunt excepturi perferendis sapiente eveniet quasi obcaecati culpa sequi corporis, voluptates quae quas recusandae expedita odio quaerat deleniti! Mollitia et eum facilis tempora harum?<br/>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, provident? Officiis minus facilis consequatur ipsum tenetur voluptates animi necessitatibus quibusdam nisi repellat numquam, alias iusto!<br/>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem beatae eos repudiandae minima, voluptate ipsam adipisci sequi inventore quaerat deserunt itaque iure culpa expedita illo odit quibusdam ipsa nulla cumque.<br/>
                <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit!</strong>
            </div>
        </div>
    </section>

    <section class="produtos-relacionados">
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
    </section>

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