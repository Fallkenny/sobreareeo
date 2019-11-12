<?php
include_once "fachada.php";

// procura usuários

$palavra = $_POST['palavra'];

$dao = $factory->getUsuarioDao();
$usuarios = $dao->buscaPorNomeCom($palavra);

?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if(sizeof($usuarios)>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Login</th>
                <th><i class="icon_mail_alt"></i> Nome</th>
            </tr>
            <?php 
            foreach ($usuarios as $usuario) {
            ?>
            <tr>
                <td><?=$usuario->getId();?></td>
                <td><?=$usuario->getLogin();?></td>
                <td><?=$usuario->getNome();?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>
