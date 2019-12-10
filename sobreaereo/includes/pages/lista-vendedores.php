<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Listagem de vendedores</h1>
            <a href="cadastro-vendedores">
                <button class="btn btn-primary">+</button>
            </a>
            <form action="galeria" name="pesquisa-vendedores" class="busca">
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
                    <th>Nome fantasia</th>
                    <th>Razão social</th>
                    <th>E-mail</th>
                    <th>Data de entrada</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php 
                    
                    $vendedores = [
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000001",
                            "nome_fantasia" => "Franco El Primo",
                            "razao_social" => "Ferrari Representacoes Ltda",
                            "email" => "oi@francoelprimo.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000002",
                            "nome_fantasia" => "Ciano Livros",
                            "razao_social" => "Ciano Comércio de Livros Ltda",
                            "email" => "contato@ciano.com.br",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000003",
                            "nome_fantasia" => "Sutjeska Books",
                            "razao_social" => "Sutjeska Livros S/A",
                            "email" => "hello@sutjeska.com",
                            "entrada" => "20/09/2019"
                        ],
                        [
                            "id" => "000004",
                            "nome_fantasia" => "Barley Shop",
                            "razao_social" => "Barley Ind e Com Ltda",
                            "email" => "hi@barleyshop.com",
                            "entrada" => "20/09/2019"
                        ]

                        ];
                    
                    
                    
                    foreach($vendedores as $v) { ?>
                        <tr>
                            <td><?= $v["id"]?></td>
                            <td><?= $v["nome_fantasia"]?></td>
                            <td><?= $v["razao_social"]?></td>
                            <td><?= $v["email"]?></td>
                            <td><?= $v["entrada"]?></td>
                            <td>
                                <a class="btnCadastro btn btn-danger" href="lista-vendedores"><i class="fas fa-trash"></i></a>
                                <a class="btnCadastro btn btn-primary" href="cadastro-vendedores"><i class="fas fa-edit"></i></a>
                                <a class="btnCadastro btn btn-primary" href="galeria"><i class="fas fa-store"></i></a>
                                <a class="btnCadastro btn btn-success" href="lista-vendedores"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

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