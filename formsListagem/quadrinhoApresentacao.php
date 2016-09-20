
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="quadrinhoApresentacao.js"></script>

<form id="quadrinhoApresentacaoForm" action="../formsDAO/quadrinhoApresentacao.php" method="POST">
	<input type="hidden" id="id" name="id">
	<input type="hidden" id="nome" name="nome">
	<input type="hidden" id="data" name="data">
	<input type="hidden" id="editora" name="editora">
	<input type="hidden" id="licenciador" name="licenciador">
	<input type="hidden" id="categoria" name="categoria">
	<input type="hidden" id="genero" name="genero">
	<input type="hidden" id="status" name="status">
	<input type="hidden" id="num_paginas" name="num_paginas">
	<input type="hidden" id="formato" name="formato">
	<input type="hidden" id="preco" name="preco">
	<input type="hidden" id="capa" name="capa">
	<input type="hidden" id="descricao" name="descricao">
	<input type="hidden" id="editoraNome" name="editoraNome">
	<input type="hidden" id="licenciadorNome" name="licenciadorNome">
	<input type="hidden" id="categoriaNome" name="categoriaNome">
	<input type="hidden" id="generoNome" name="generoNome">
	<input type="hidden" id="statusNome" name="statusNome">
	<input type="hidden" id="formatoNome" name="formatoNome">
	<input type="hidden" id="formatoDescricao" name="formatoDescricao">
	

	<table>

<?php 

	require_once("../BD/quadrinhoDAO.php");

	$DAOquadrinho = new QuadrinhoDAO();
	$quadrinhoArray = $DAOQuadrinho->fetchAll();

	echo '<table>';

	foreach($quadrinhoArray as $quadrinho){
		echo '<tr id="'.$quadrinho->getId().'"> 
			<td name="nome">'.$quadrinho->getNome().'</td>
			<td name="data">'.$quadrinho->getData().'</td>
			<td name="editora">'.$quadrinho->getEditora().'</td>
			<td name="licenciador">'.$quadrinho->getLicenciador().'</td>
			<td name="categoria">'.$quadrinho->getCategoria().'</td>
			<td name="genero">'.$quadrinho->getGenero().'</td>
			<td name="status">'.$quadrinho->getStatus().'</td>
			<td name="num_paginas">'.$quadrinho->getNumPaginas().'</td>
			<td name="formato">'.$quadrinho->getFormato().'</td>
			<td name="preco">'.$quadrinho->getPreço().'</td>
			<td name="capa">'.$quadrinho->getCapa().'</td>
			<td name="descricao">'.$quadrinho->getDescricao().'</td>
			<td name="editoraNome">'.$quadrinho->getEditoraNome().'</td>
			<td name="licenciadorNome">'.$quadrinho->getLicenciadorNome().'</td>
			<td name="categoriaNome">'.$quadrinho->getCategoriaNome().'</td>
			<td name="generoNome">'.$quadrinho->getGeneroNome().'</td>
			<td name="statusNome">'.$quadrinho->getStatusNome().'</td>
			<td name="formatoNome">'.$quadrinho->getFormatoNome().'</td>
			<td name="formatoDescricao">'.$quadrinho->getFormatoDescricao().'</td>
			<td> <input type="button" class="editarButton" id="'.$quadrinho->getId().'" value="Editar"> </td>
			</tr>';
	}

?>

	</table>

	<input type="button" value="Novo" class="novoButton"/>
</form>