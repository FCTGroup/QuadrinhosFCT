<?php

	require_once("../BD/quadrinhoDAO.php");

	$quadrinhoForm = $_POST;
	$quadrinho = array();
	parse_str($quadrinhoForm["dadosForm"],$dados);
	$nome = $dados["hiddenNome"];
	$numero = $dados["hiddenNumero"];
	$quadrinhoDAO = new QuadrinhoDAO();

	try{
		$quadrinhoDAO->delete($nome,$numero);
		//echo "Excluído com sucesso";	
		echo $nome.$numero;
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>