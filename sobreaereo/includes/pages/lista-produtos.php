<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Listagem de produtos</h1>
            <a href="cadastro-produtos">
                <button class="btn btn-primary">+</button>
            </a>
            <form action="galeria" name="pesquisa-produtos" class="busca">
                <input type="text" class="busca__campo" placeholder="Pesquisar" required>
                <button type="submit" class="busca__btn" title="Buscar!"> <i class="fas fa-search"></i> </button>
            </form>
        </div>
    </section>

    <section class="listagem-cadastros">
        <div class="container">
            <table class="tabela-resultados">
                <thead>
                    <th>id</th>
                    <th>imagem</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Qt Estoque</th>
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
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/celular2.png",
                            "descricao-produto" => "iPhone X",
                            "preco" => "R$ 4.450,99",
                            "categoria-produto" => "Celulares e Smartphones",
                            "id" => "000002",
                            "marca" => "Apple",                            
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/livro1.jpg",
                            "descricao-produto" => "Este livro não vai te deixar rico",
                            "preco" => "R$ 34,99",
                            "categoria-produto" => "Livros",
                            "id" => "000003",
                            "marca" => "Livros",                            
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/livro2.jpg",
                            "descricao-produto" => "Sociedade do Cansaço",
                            "preco" => "R$ 14,99",
                            "categoria-produto" => "Livros",
                            "id" => "000004",
                            "marca" => "Livros",               
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/livro3.jpg",
                            "descricao-produto" => "Amores impossíveis e outras perturbações quânticas",
                            "preco" => "R$ 34,99",
                            "categoria-produto" => "Livros",
                            "id" => "000005",
                            "marca" => "Livros",               
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/videogame1.jpg",
                            "descricao-produto" => "Nintendo Switch",
                            "preco" => "R$ 1.899,99",
                            "categoria-produto" => "Games",
                            "id" => "000006",
                            "marca" => "Nintendo",                  
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/videogame2.jpg",
                            "descricao-produto" => "Playstation 4",                            
                            "preco" => "R$ 1.799,99",
                            "categoria-produto" => "Games",
                            "id" => "000007",
                            "marca" => "Sony",              
                            "qtd" => "50"
                        ],
                        [
                            "foto" => "img/front/videogame3.jpg",
                            "descricao-produto" => "XBox One X Minecraft Edition",                            
                            "preco" => "R$ 1.799,99",
                            "categoria-produto" => "Games",
                            "id" => "000008",
                            "marca" => "Microsoft",                   
                            "qtd" => "50"
                        ],
                    ];
                    
                    foreach($produtos as $p) { ?>
                        <tr>
                            <td><?= $p["id"]?></td>
                            
                            <td><img class="produto-table-image" src="<?= $p["foto"] ?>"/></td>
                            <td><?= $p["descricao-produto"]?></td>
                            <td><?= $p["categoria-produto"]?></td>
                            <td><?= $p["marca"]?></td>
                            <td><?= $p["preco"]?></td>
                            <td><?= $p["qtd"]?></td>
                            <td>
                                <a class="btnCadastro btn btn-danger" href="lista-produtos"><i class="fas fa-trash"></i></a>
                                <a class="btnCadastro btn btn-primary" href="cadastro-produtos"><i class="fas fa-edit"></i></a>
                                <a class="btnCadastro btn btn-primary" href="galeria"><i class="fas fa-store"></i></a>
                                <a class="btnCadastro btn btn-success" href="lista-produtoss"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>


    </section>

</main>