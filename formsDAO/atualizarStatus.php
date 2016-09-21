<?php

	require_once("../BD/statusDAO.php");

	$statusForm = $_POST;
	$dados = array();
	parse_str($statusForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];

	$statusDAO = new StatusDAO();
	try{
		$stauts = new Status($nome, $id);
		$statusDAO->update($status);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>