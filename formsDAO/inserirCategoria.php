<?php

	require_once("../BD/categoriaDAO.php");

	$categoriaForm = $_POST;
	$dados = array();
	parse_str($categoriaForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];

	$CategoriaDAO = new CategoriaDAO();
	try{
		$CategoriaDAO->insert($nome);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>