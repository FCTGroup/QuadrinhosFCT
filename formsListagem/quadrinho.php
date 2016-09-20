
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="genero.js"></script>

<form id="generoForm" action="../formsDAO/genero.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	

	<table>

<?php 

	require_once("../BD/generoDAO.php");

	$DAOGenero = new GeneroDAO();
	$generoArray = $DAOGenero->fetchAll();

	echo '<table>';

	foreach($generoArray as $genero){
		echo '<tr id="'.$genero->getId().'"> 
			<td name="nome">'.$genero->getName().'</td>
			<td> <input type="button" class="editarButton" id="'.$genero->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
</form>