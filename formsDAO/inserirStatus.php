<?php

	require_once("../BD/statusDAO.php");

	$statusForm = $_POST;
	$dados = array();
	parse_str($statusForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];

	$StatusDAO = new StatusDAO();
	try{
		$StatusDAO->insert($nome);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>