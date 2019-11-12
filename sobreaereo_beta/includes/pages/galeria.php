<main id="galeria">


    <section class="topoPadrao">
        <div class="container">
            <h1 class="titulo3">Promoção 50% off</h1>
            <p class="numProdutos">72 produtos encontrados</p>
        </div>
    </section>
    <section class="destaques">
        <div class="container">
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
                        ],
                        [
                            "foto" => "img/front/videogame2.jpg",
                            "titulo" => "Playstation 4",
                            "link" => "produto",
                            "preco" => "R$ 1.799,99"
                        ],
                        [
                            "foto" => "img/front/videogame3.jpg",
                            "titulo" => "XBox One X Minecraft Edition",
                            "link" => "produto",
                            "preco" => "R$ 1.799,99"
                        ],
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
                        ],
                        [
                            "foto" => "img/front/videogame2.jpg",
                            "titulo" => "Playstation 4",
                            "link" => "produto",
                            "preco" => "R$ 1.799,99"
                        ],
                        [
                            "foto" => "img/front/videogame3.jpg",
                            "titulo" => "XBox One X Minecraft Edition",
                            "link" => "produto",
                            "preco" => "R$ 1.799,99"
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