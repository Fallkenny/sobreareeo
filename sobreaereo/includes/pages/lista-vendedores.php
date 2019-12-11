<?php 
if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
    header("Location: loginpage");
    die();
}

include('dao/MySqlVendedorDao.php');

$factory = new MySqlDaoFactory();
$dao = $factory->getVendedorDao();
$vendedores = $dao->getTodosVendedores();

?>

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

            <?php if ($vendedores) { ?>
            <table class="tabela-resultados">
                <thead>
                    <th>id</th>
                    <th>Nome fantasia</th>
                    <th>Razão social</th>
                    <th>E-mail</th>
                    <!-- <th>Data de entrada</th> -->
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php                    
                    
                    foreach($vendedores as $v) { ?>
                        <tr>
                            <td><?= $v["vendedor_id"]?></td>
                            <td><?= $v["lojaNome"]?></td>
                            <td><?= $v["lojaRazaoSocial"]?></td>
                            <td><?= $v["lojaEmail"]?></td>
                            <!-- <td><?= $v["entrada"]?></td> -->
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

            <?php } else { ?>
                <p>Não há produtos cadastrados!</p>
            
            <?php } ?>


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