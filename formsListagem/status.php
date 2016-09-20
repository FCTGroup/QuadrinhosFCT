
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="status.js"></script>

<form id="statusForm" action="../formsDAO/status.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	
	<table>

<?php 

	require_once("../BD/statusDAO.php");

	$DAOStatus = new StatusDAO();
	$statusArray = $DAOStatus->fetchAll();

	echo '<table>';

	foreach($statusArray as $status){
		echo '<tr id="'.$status->getId().'"> 
			<td name="nome">'.$status->getName().'</td>
			<td> <input type="button" class="editarButton" id="'.$status->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
</form>