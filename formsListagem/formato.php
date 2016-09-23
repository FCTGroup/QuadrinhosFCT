
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="formato.js"></script>

<form id="formatoForm" action="../formsDAO/formato.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	
	<table>

<?php 

	require_once("../BD/formatoDAO.php");
	require_once('../Entities/formato.php');

	$DAOFormato = new FormatoDAO();


	$formatoArray = $DAOFormato->fetchAll();

	echo '<table>';

	foreach($formatoArray as $formato){
		echo '<tr id="'.$formato->getId().'"> 
			<td name="nome">'.$formato->getName().'</td>
			<td> <input type="button" class="editarButton" id="'.$formato->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
	<a href="/web/QuadrinhosFCT/manager.php"><input type="button" value="Voltar"/></a>
</form>