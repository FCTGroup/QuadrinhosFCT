<?php

	require_once("../BD/quadrinhoDAO.php");

	$quadrinhoForm = $_POST;
	$quadrinho = array();
	parse_str($quadrinhoForm["dadosForm"],$dados);
	$nome = $dados["nomeTxt"];
	$numero = $dados['numeroTxt'];
	$data= $dados['dataTxt'];
	$editora= $dados['editoraSel'];
	$licenciador= $dados['licenciadorSel'];
	$categoria= $dados['categoriaSel'];
	$genero= $dados['generoSel'];
	$status= $dados['statusSel'];
	$num_paginas= $dados['num_paginasTxt'];
	$formato= $dados['formatoSel'];
	$preco= $dados['precoTxt'];
	$capa= $dados['capaTxt'];
	$descricao= $dados['descricaoTxt'];

	$quadrinhoDAO = new QuadrinhoDAO();
	try{
		$quadrinho = new quadrinho($nome,$numero,$data,$editora,$licenciador,$categoria,$genero,$status,$num_paginas,$formato,$preco,$capa,$descricao,$id);
		$quadrinhoDAO->update($quadrinho);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>