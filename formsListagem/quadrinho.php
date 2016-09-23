
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="quadrinho.js"></script>

<form id="quadrinhoForm" action="../formsDAO/quadrinho.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	<input type="hidden" id="numero" name="numero">
	

	<table>

<?php 

	require_once("../BD/quadrinhoDAO.php");
	require_once("../Entities/quadrinho.php");

	$DAOQuadrinho = new QuadrinhoDAO();
	$quadrinhoArray = $DAOQuadrinho->fetchAll();

	echo '<table>';

	$i = 0;
	foreach($quadrinhoArray as $quadrinho){
		echo '<tr id="id'.$i.'"> 
			<td name="nome">'.$quadrinho->getNome().'</td>
			<td name="numero">'.$quadrinho->getNumero().'</td>
			<td> <input type="button" class="editarButton" id="'.$i++.'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
	<a href="/web/QuadrinhosFCT/manager.php"><input type="button" value="Voltar"/></a>
</form>