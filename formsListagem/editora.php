
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="editora.js"></script>

<form id="editoraForm" action="../formsDAO/editora.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	<input type="hidden" id="address" name="address">
	<input type="hidden" id="description" name="description">

	<table>

<?php 

	require_once("../BD/editoraDAO.php");

	$DAOEditora = new EditoraDAO();
	$editoraArray = $DAOEditora->fetchAll();

	echo '<table>';

	foreach($editoraArray as $editora){
		echo '<tr id="'.$editora->getId().'"> 
			<td name="nome">'.$editora->getName().'</td>
			<td name="address">'.$editora->getAddress().'</td>
			<td name="description">'.$editora->getDescription().'</td>
			<td> <input type="button" class="editarButton" id="'.$editora->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
</form>