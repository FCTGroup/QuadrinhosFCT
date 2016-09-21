<?php

	require_once("../BD/statusDAO.php");

	$statusForm = $_POST;
	$dados = array();
	parse_str($statusForm["dadosForm"],$dados);
	$id = $dados['idHidden'];

	$statusDAO = new StatusDAO();
	try{
		$statusDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>