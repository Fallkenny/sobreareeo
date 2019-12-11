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
                                <td><img class="produto-table-image" src="img_database/<?= $p['imagem_main']?>"/></td>
                                <td><?= $p['descricao']?></td>
                                <td><?= $p['categoria']?></td>
                                <td><?= $p['marca']?></td>
                                <td><?= $p['preco']?></td>
                                
                                <td>
                                    <a class="btnCadastro btn btn-primary" href="produto/<?= $p['produto_id']?>"><i class="fas fa-store"></i></a>
                                </td>
                            </tr>
    
                        <?php } ?>
                    </tbody>
                </table>

                <?php } else { ?>
                    <h2>Não há produtos cadastrados!</h2>
                    <a href="cadastro-produtos" class="btn" style="margin-top: 32px;">Cadastrar produtos</a>
                <?php } ?>

        </div>


    </section>

</main>