<?php

	require_once("../BD/generoDAO.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$id = $dados['idHidden'];

	$generoDAO = new GeneroDAO();
	try{
		$generoDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>