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
            
            <!-- <form action="galeria" name="pesquisa-vendedores" class="busca">
                <input type="text" class="busca__campo" placeholder="Pesquisar" required>
                <button type="submit" class="busca__btn" title="Buscar!"> <i class="fas fa-search"></i> </button>
            </form> -->
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
                </thead>
                <tbody>
                    <?php                    
                    
                    foreach($vendedores as $v) { ?>
                        <tr>
                            <td><?= $v["vendedor_id"]?></td>
                            <td><?= $v["lojaNome"]?></td>
                            <td><?= $v["lojaRazaoSocial"]?></td>
                            <td><?= $v["lojaEmail"]?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

            <?php } else { ?>
                <h2>Não há vendedores cadastrados!</h2>
                <a href="cadastro-vendedores" class="btn" style="margin-top: 32px;">Cadastrar vendedores</a>
            <?php } ?>

        </div>
    </section>

</main>