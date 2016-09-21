<?php

	require_once("../BD/generoDAO.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];

	$GeneroDAO = new GeneroDAO();
	try{
		$GeneroDAO->insert($nome);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>