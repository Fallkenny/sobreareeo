<?php 

session_start();

function adicionaCarrinho($produto_id) {
    $arr = array();
    if (isset($_SESSION["carrinho_ids"]) && !empty($_SESSION["carrinho_ids"])) {
        if ( in_array($produto_id, $_SESSION["carrinho_ids"] ) ){
            return false;
        } else {
            $arr = $_SESSION["carrinho_ids"];
        }
    }
    
    array_push($arr, $produto_id);
    $_SESSION["carrinho_ids"] = $arr;
    return true;
}



function removeCarrinho($produto_id) {
    
    
    $arr = array();
    if (isset($_SESSION["carrinho_ids"]) && !empty($_SESSION["carrinho_ids"])) {
        $arr = $_SESSION["carrinho_ids"];
        if (($key = array_search($produto_id, $arr)) !== false) {
            unset($arr[$key]);
        }    
    } else {
        return 'não foi';
    }
    
    $_SESSION["carrinho_ids"] = $arr;


    die();
    return 'foi';
}


if(isset($_POST['funcao']) && !empty($_POST['funcao'])) {
    $funcao = $_POST['funcao'];
    switch($funcao) {
        case 'adicionaCarrinho' : adicionaCarrinho($_POST['produto_id']);break;
        case 'removeCarrinho' : removeCarrinho($_POST['produto_id']); break;
        // other cases
    }
}


?>



