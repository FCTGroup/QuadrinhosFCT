<?php

	require_once("../BD/categoriaDAO.php");

	$categoriaForm = $_POST;
	$dados = array();
	parse_str($categoriaForm["dadosForm"],$dados);
	$id = $dados["idHidden"];

	$categoriaDAO = new CategoriaDAO();
	try{
		$categoriaDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>