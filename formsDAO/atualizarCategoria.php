<?php

	require_once("../BD/categoriaDAO.php");

	$categoriaForm = $_POST;
	$dados = array();
	parse_str($categoriaForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];

	$categoriaDAO = new CategoriaDAO();
	try{
		$categoria = new Categoria($nome, $id);
		$categoriaDAO->update($categoria);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>