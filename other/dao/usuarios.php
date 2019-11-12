<?php
// layout do cabeçalho

$page_title = "Listagem de Usuários";

include_once "layout_header.php";
include_once "fachada.php";

echo "<section>";

// procura usuários

$dao = $factory->getUsuarioDao();
$usuarios = $dao->buscaTodos();


// display the products if there are any
if($usuarios) {
//if($total_rows>0){
 
	echo "<table class='table table-hover table-responsive table-bordered'>";
	echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Login</th>";
		echo "<th>Nome</th>";
	echo "</tr>";

	while ($row = $usuarios->fetch(PDO::FETCH_ASSOC)){

		extract($row);

		echo "<tr>";
			echo "<td>{$id}</td>";
			echo "<td>{$login}</td>";
			echo "<td>{$nome}</td>";
			echo "<td>";
 
			// botão para mostrar um usuário
			echo "<a href='mostra_usuario.php?id={$id}' class='btn btn-primary left-margin'>";
				echo "<span class='glyphicon glyphicon-list'></span> Mostra";
			echo "</a>";
			echo "</td>";
 
		echo "</tr>";
	}
	echo "</table>";
}
 
echo "</section>";
	// layout do rodapé
include_once "layout_footer.php";
?>