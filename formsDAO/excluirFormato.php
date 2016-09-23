<?php

	require_once("../BD/formatoDAO.php");

	$categoriaForm = $_POST;
	$dados = array();
	parse_str($categoriaForm["dadosForm"],$dados);
	$id = $dados["idHidden"];

	$formatoDAO = new FormatoDAO();
	try{
		$formatoDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>