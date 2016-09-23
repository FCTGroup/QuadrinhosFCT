<?php

	require_once("../BD/formatoDAO.php");
	require_once("../Entities/formato.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];
	$descricao = $dados['descricaoTxt'];

	$formatoDAO = new FormatoDAO();
	try{
		$formato = new Formato($nome, $descricao, $id);
		$formatoDAO->update($formato);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>