<?php

	require_once("../BD/quadrinhoDAO.php");

	$quadrinhoForm = $_POST;
	$dados = array();
	parse_str($quadrinhoForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];
	$numero = $dados['numeroTxt'];
	$data= $dados['dataTxt'];
	$editora= $dados['editoraTxt'];
	$licenciador= $dados['licenciadorTxt'];
	$categoria= $dados['categoriaTxt'];
	$genero= $dados['generoTxt'];
	$status= $dados['statusTxt'];
	$num_paginas= $dados['num_paginasTxt'];
	$formato= $dados['formatoTxt'];
	$preco= $dados['precoTxt'];
	$capa= $dados['capaTxt'];
	$descricao= $dados['descricaoTxt'];

	$quadrinhoDAO = new QuadrinhoDAO();
	try{
		$quadrinho = new quadrinho($nome,$numero,$data,$editora,$licenciador,$categoria,$genero,$status,$num_paginas,$formato,$preco,$capa,$descricao,$id);
		$quadrinhoaDAO->update($quadrinho);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>