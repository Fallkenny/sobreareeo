<main id="home">
    <section class="topo">
        <div class="container">
            <h1 class="titulo">Sobreaéreo</h1>
            <h2 class="subtitulo">Os melhores produtos para os melhores clientes.</h2>
            <button class="btn" onclick="scrollMenu('destaques')">Veja nossos destaques</button>
        </div>
    </section>

    <section class="promocoes">
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
    </section>

    <section class="destaques" id="destaques">
        <div class="container">
            <h2 class="titulo2">Produtos em destaque</h2>
            <div class="gridProdutos">
                <?php 
                    $produtos = [
                        [
                            "foto" => "img/front/celular1.jpg",
                            "titulo" => "Galaxy A50",
                            "link" => "produto",
                            "preco" => "R$ 1.450,99"
                        ],
                        [
                            "foto" => "img/front/celular2.png",
                            "titulo" => "iPhone X",
                            "link" => "produto",
                            "preco" => "R$ 4.450,99"
                        ],
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
                        // ],
                        // [
                        //     "foto" => "img/front/livro3.jpg",
                        //     "titulo" => "Amores impossíveis e outras perturbações quânticas",
                        //     "link" => "produto",
                        //     "preco" => "R$ 34,99"
                        // ],
                        // [
                        //     "foto" => "img/front/videogame1.jpg",
                        //     "titulo" => "Nintendo Switch",
                        //     "link" => "produto",
                        //     "preco" => "R$ 1.899,99"
                        // ],
                        // [
                        //     "foto" => "img/front/videogame2.jpg",
                        //     "titulo" => "Playstation 4",
                        //     "link" => "produto",
                        //     "preco" => "R$ 1.799,99"
                        // ],
                        // [
                        //     "foto" => "img/front/videogame3.jpg",
                        //     "titulo" => "XBox One X Minecraft Edition",
                        //     "link" => "produto",
                        //     "preco" => "R$ 1.799,99"
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