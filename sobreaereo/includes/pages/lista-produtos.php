<?php 
if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
    header("Location: loginpage");
    die();
}

include('dao/MySqlProdutoDao.php');

$factory = new MySqlDaoFactory();
$dao = $factory->getProdutoDao();
$produtos = $dao->buscaPorVendedor($_SESSION['user_ID']);

?>

<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Listagem de produtos</h1>
            <!-- <a href="cadastro-produtos">
                <button class="btn btn-primary">+</button>
            </a> -->
            <form action="galeria" name="pesquisa-produtos" class="busca">
                <input type="text" class="busca__campo" placeholder="Pesquisar" required>
                <button type="submit" class="busca__btn" title="Buscar!"> <i class="fas fa-search"></i> </button>
            </form>
        </div>
    </section>

    <section class="listagem-cadastros">
        <div class="container">

            <?php if ($produtos) { ?>
                <table class="tabela-resultados">
                    <thead>
                        <th>id</th>
                        <th>imagem</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Marca</th>
                        <th>Preço</th>
                        <!-- <th>Qt Estoque</th> -->
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        <?php 
    
                        foreach($produtos as $p) { ?>
                            <tr>
                                <td><?= $p['produto_id']?></td>
                                <td><img class="produto-table-image" src="img_database/<?= $p['imagem_main']?>"/></td> <!-- ! TODO: trocar por imagem_main -->
                                <td><?= $p['descricao']?></td>
                                <td><?= $p['categoria']?></td>
                                <td><?= $p['marca']?></td>
                                <td><?= $p['preco']?></td>
                                
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

            <?php } else { ?>
                <p>Não há produtos cadastrados!</p>
            
            <?php } ?>

        </div>


    </section>

</main>