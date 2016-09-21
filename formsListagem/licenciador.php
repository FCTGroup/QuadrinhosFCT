
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="licenciador.js"></script>

<form id="licenciadorForm" action="../formsDAO/licenciador.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	<input type="hidden" id="site" name="site">

	<table>

<?php 

	require_once("../BD/licenciadorDAO.php");

	$DAOLicenciador = new LicenciadorDAO();
	$licenciadorArray = $DAOLicenciador->fetchAll();

	echo '<table>';

	foreach($licenciadorArray as $licenciador){
		echo '<tr id="'.$licenciador->getId().'"> 
			<td name="nome">'.$licenciador->getName().'</td>
			<td name="site">'.$licenciador->getAddress().'</td>
			<td> <input type="button" class="editarButton" id="'.$licenciador->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
	<a href="/web/QuadrinhosFCT/manager.php"><input type="button" value="Voltar"/></a>
</form>