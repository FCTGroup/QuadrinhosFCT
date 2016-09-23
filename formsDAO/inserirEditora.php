<?php

	require_once("../BD/editoraDAO.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];
	$site = $dados['siteTxt'];
	$descricao = $dados['descricaoTxt'];

	$EditoraDAO = new EditoraDAO();
	try{
		$EditoraDAO->insert($nome,$descricao,$site);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>