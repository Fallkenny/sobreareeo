<?php 

    include('dao/MySqlProdutoDao.php');
    $factory = new MySqlDaoFactory();
    $dao = $factory->getProdutoDao();


    if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
        header("Location: loginpage");
        die();
    }

    if (isset($_SESSION["carrinho_ids"]) && !empty($_SESSION["carrinho_ids"])) {
        $produtos_ids = $_SESSION["carrinho_ids"];
        $produtos = array();
        foreach ($produtos_ids as $id) {
            $produto = $dao->buscaPorId($id);
            array_push($produtos, $produto);
        }
        // var_dump($produtos);
        // die('deu boa');
    } 
?>


<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Carrinho</h1>
        </div>
    </section>

    <section class="listagem-cadastros">
        <div class="container">

        <?php if (!empty($produtos)) { ?>
            <table class="tabela-resultados">
                <thead>
                    <th>imagem</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    
                    <?php foreach($produtos as $p) {  ?>
                            <tr>       
                                <td><img class="produto-table-image" src="img_database/<?= $p['imagem_main']?>"/></td>
                                <td><?= $p['descricao']?></td>
                                <td><?= $p['categoria']?></td>
                                <td><?= $p['marca']?></td>
                                <td><?= $p['preco']?></td>   
                                
                                <td>
                                    <!-- <a class="btnCadastro btn btn-danger" href="lista-produtos"><i class="fas fa-trash"></i></a> -->
                                    <button onclick="ajaxCarrinho(<?= $p['produto_id']?>)" class="btnCadastro btn btn-danger" ><i class="fas fa-trash"></i></button>
                                    <a class="btnCadastro btn btn-primary" href="produto/<?= $p['produto_id']?>"><i class="fas fa-store"></i></a>
                                </td>
                            </tr>
    
                        <?php } ?>

                        
                    </tbody>
                </table>
                
                <div class="box-botoes">
                    <a href="galeria" type="submit" class="btn btn2"><i class="fas fa-store"></i>&nbsp;&nbsp;Continuar comprando</a>
                    <a href="checkout" type="submit" class="btn btn-primary"><i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;Finalizar compra</a>
                </div>
                
            <?php } else { ?>
                <p>Carrinho vazio. Que tal <a href="galeria">fazer algumas compras?</a> ;)</p>
            <?php } ?>
           
        </div>
    </section>


</main>


<script>
    function ajaxCarrinho(id) {
        $.ajax({
            url: 'classes/Carrinho.php',
            data: {
                funcao: 'removeCarrinho',
                produto_id: id,
            },
            type: 'post',
            success: function(output) {
                alert('Produto removido do carrinho!' + output);
                window.location = "./cart"
            }
        })
    }


</script>