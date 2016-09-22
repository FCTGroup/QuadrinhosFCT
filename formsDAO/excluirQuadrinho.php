<?php

	require_once("../BD/quadrinhoDAO.php");

	$quadrinhoForm = $_POST;
	$quadrinho = array();
	parse_str($quadrinhoForm["dadosForm"],$dados);
	$id = $dados["idHidden"];

	$quadrinhoDAO = new QuadrinhoDAO();
	try{
		$quadrinhoDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>