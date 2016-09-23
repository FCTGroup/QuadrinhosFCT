<?php

	require_once("../BD/editoraDAO.php");
	require_once("../Entities/editora.php");

	$generoForm = $_POST;
	$dados = array();
	parse_str($generoForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];
	$site = $dados['siteTxt'];
	$descricao = $dados['descricaoTxt'];

	$editoraDAO = new EditoraDAO();
	try{
		$editora = new Editora($nome, $descricao, $site, $id);
		$editoraDAO->update($editora);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>