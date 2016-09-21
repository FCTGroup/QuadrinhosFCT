<?php

	session_start();

	if(!isset($_SESSION["carrinho"])){
		$_SESSION["carrinho"] = array();
	}

	$nome = $_POST["nome"];
	$numero = $_POST["numero"];
	$quantidade = $_POST["quantidade"];

	$carrinho = $_SESSION["carrinho"];

	$quadrinhoJaInserido = false;

	for($i = 0; $i < sizeof($carrinho); $i++){
		$quadrinho = $carrinho[$i];
		if($quadrinho['nome'] == $nome && $quadrinho['numero'] == $numero){
			$quadrinho['quantidade'] += $quantidade;
			$quadrinhoJaInserido = true;
			$carrinho[$i] = $quadrinho;
		}
	}

	if(!$quadrinhoJaInserido)
		$carrinho[] = array('nome' => $nome, 'numero' => $numero, 'quantidade' => $quantidade);

	$_SESSION["carrinho"] = $carrinho;

	echo $nome." ".$numero." x".$quantidade." adicionado";

	

?>