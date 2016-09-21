<?php

	require_once("../BD/licenciadorDAO.php");
	require_once("../Entities/licenciador.php");

	$licenciadorForm = $_POST;
	$dados = array();
	parse_str($licenciadorForm["dadosForm"],$dados);
	$id = $dados['idHidden'];
	$nome = $dados['nomeTxt'];
	$endereco = $dados['siteTxt'];

	$licenciadorDAO = new LicenciadorDAO();
	try{
		$licenciador = new Licenciador($nome,$endereco, $id);
		$licenciadorDAO->update($licenciador);
		echo "Atualizado com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao atualizar";
	}

?>