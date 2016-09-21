
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="categoria.js"></script>

<form id="categoriaForm" action="../formsDAO/categoria.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">

	<table>

<?php 

	require_once("../BD/categoriaDAO.php");

	$DAOcategoria = new CategoriaDAO();
	$categoriaArray = $DAOcategoria->fetchAll();

	echo '<table>';

	foreach($categoriaArray as $categoria){
		echo '<tr id="'.$categoria->getId().'"> 
			<td name="nome">'.$categoria->getName().'</td>
			<td> <input type="button" class="editarButton" id="'.$categoria->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
	<a href="/web/QuadrinhosFCT/manager.php"><input type="button" value="Voltar"/></a>
</form>