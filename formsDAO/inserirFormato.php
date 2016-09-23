<?php

	require_once("../BD/formatoDAO.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$nome = $dados['nomeTxt'];
	$descricao = $dados['descricaoTxt'];

	$FormatoDAO = new FormatoDAO();
	try{
		$FormatoDAO->insert($nome,$descricao);
		echo "Inserido com sucesso";
	}catch(PDOException $e){
		echo "Erro ao inserir";
	}

?>


Warning: PDOStatement::bindValue() expects parameter 3 to be long, string given in /opt/lampp/htdocs/web/QuadrinhosFCT/BD/formatoDAO.php on line 16

Warning: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: no parameters were bound in /opt/lampp/htdocs/web/QuadrinhosFCT/BD/formatoDAO.php on line 17
Inserido com sucesso

Nome:

Descrição: 