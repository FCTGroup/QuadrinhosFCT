<?php

	require_once("../BD/editoraDAO.php");

	$categoriaForm = $_POST;
	$dados = array();
	parse_str($categoriaForm["dadosForm"],$dados);
	$id = $dados["idHidden"];

	$editoraDAO = new EditoraDAO();
	try{
		$editoraDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>