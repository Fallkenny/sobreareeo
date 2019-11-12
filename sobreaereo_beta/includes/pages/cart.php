<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Carrinho</h1>
        </div>
    </section>

    <section class="listagem-cadastros">
        <div class="container">
            <table class="tabela-resultados">
                <thead>
                    <th>imagem</th>
                    <th>Descrição</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Preço total</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php 

                    $produtos = [
                        [
                            "foto" => "img/front/celular1.jpg",
                            "descricao-produto" => "Galaxy A50",
                            "preco" => "R$ 1.450,99",                            
                            "categoria-produto" => "Celulares e Smartphones",
                            "id" => "000001",
                            "marca" => "Samsung",                            
                            "qtd" => "1"
                        ],
                        [
                            "foto" => "img/front/livro1.jpg",
                            "descricao-produto" => "Este livro não vai te deixar rico",
                            "preco" => "R$ 34,99",
                            "categoria-produto" => "Livros",
                            "id" => "000003",
                            "marca" => "Livros",                            
                            "qtd" => "1"
                        ],
                        [
                            "foto" => "img/front/livro2.jpg",
                            "descricao-produto" => "Sociedade do Cansaço",
                            "preco" => "R$ 14,99",
                            "categoria-produto" => "Livros",
                            "id" => "000004",
                            "marca" => "Livros",               
                            "qtd" => "1"
                        ],
                        [
                            "foto" => "img/front/videogame1.jpg",
                            "descricao-produto" => "Nintendo Switch",
                            "preco" => "R$ 1.899,99",
                            "categoria-produto" => "Games",
                            "id" => "000006",
                            "marca" => "Nintendo",                  
                            "qtd" => "1"
                        ]
                    ];
                    
                    foreach($produtos as $p) { ?>
                        <tr>                            
                            <td><img class="produto-table-image" src="<?= $p["foto"] ?>"/></td>
                            <td><?= $p["descricao-produto"]?></td>
                            <td><?= $p["marca"]?></td>
                            <td><?= $p["preco"]?></td>
                            <td><?= $p["qtd"]?></td>
                            <td><?= $p["preco"]?></td>
                            <td>
                                <a class="btnCadastro btn btn-danger" href="lista-produtos"><i class="fas fa-trash"></i></a>
                                <a class="btnCadastro btn btn-primary" href="galeria"><i class="fas fa-store"></i></a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

            <div class="box-botoes">
                <a href="galeria" type="submit" class="btn btn2"><i class="fas fa-store"></i>&nbsp;&nbsp;Continuar comprando</a>
                <a href="checkout" type="submit" class="btn btn-primary"><i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;Finalizar compra</a>
            </div>

           
        </div>
    </section>

</main>