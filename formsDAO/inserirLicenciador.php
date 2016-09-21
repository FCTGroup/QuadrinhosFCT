<?php

	require_once("../BD/licenciadorDAO.php");
	require_once("../Entities/licenciador.php");

	$licenciadorForm = $_POST;
	$dados = array();
	parse_str($licenciadorForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];
	$endereco = $dados['siteTxt'];

	$licenciadorDAO = new LicenciadorDAO();
	try{
		$licenciadorDAO->insert($nome,$endereco);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>