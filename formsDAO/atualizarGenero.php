<?php

	require_once("../BD/generoDAO.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];

	$generoDAO = new GeneroDAO();
	try{
		$genero = new Genero($nome, $id);
		$generoDAO->update($genero);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>