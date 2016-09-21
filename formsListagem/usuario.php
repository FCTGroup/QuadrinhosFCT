
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="usuario.js"></script>

<form id="usuarioForm" action="../formsDAO/usuario.php" method="POST">
	<input type="hidden" id="usuario" name="usuario">
	
	<table>

<?php 

	require_once("../BD/usuarioDAO.php");

	$DAOUsuario = new UsuarioDAO();
	$usuarioArray = $DAOUsuario->fetchAll();

	echo '<table>';

	foreach($usuarioArray as $usuario){
		echo '<tr> 
			<td name="nome">'.$usuario.'</td>
			<td> <input type="button" class="excluirButton" id="'.$usuario.'" value="Excluir"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
	<a href="/web/QuadrinhosFCT/manager.php"><input type="button" value="Voltar"/></a>
</form>