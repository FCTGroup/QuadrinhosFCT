<?php

	session_start();

	if(!isset($_SESSION["carrinho"])){
		$_SESSION["carrinho"] = array();
	}

	$nome = $_POST["nome"];
	$numero = $_POST["numero"];
	$quantidade = $_POST["quantidade"];

	$carrinho = $_SESSION["carrinho"];

	$antigaQuantidade = 0;

	if($quantidade != 0){
		for($i = 0; $i < sizeof($carrinho); $i++){
			$quadrinho = $carrinho[$i];
			if($quadrinho['nome'] == $nome && $quadrinho['numero'] == $numero){
				$antigaQuantidade = $quadrinho['quantidade'];
				$quadrinho['quantidade'] = $quantidade;
				$carrinho[$i] = $quadrinho;
				break;
			}
		}
	}
	else{
		$pos = 0;
		for($i = 0; $i < sizeof($carrinho); $i++){
			$quadrinho = $carrinho[$i];
			if($quadrinho['nome'] != $nome || $quadrinho['numero'] != $numero){
				$carrinho[$pos++] = $quadrinho;
			}
			else{
				$antigaQuantidade = $quadrinho['quantidade'];
			}
		}
		unset($carrinho[$pos]);
	}

	$_SESSION["carrinho"] = $carrinho;

	echo $nome." ".$numero." x".$quantidade." atualizado,".($quantidade-$antigaQuantidade);

?>