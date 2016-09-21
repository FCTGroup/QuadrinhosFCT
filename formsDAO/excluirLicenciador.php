<?php

	require_once("../BD/licenciadorDAO.php");

	$licenciadorForm = $_POST;
	$dados = array();
	parse_str($licenciadorForm["dadosForm"],$dados);
	$id = $dados['idHidden'];

	$licenciadorDAO = new LicenciadorDAO();
	try{
		$licenciadorDAO->delete($id);
		echo "Excluído com sucesso";	
	}catch(PDOException $e){
		echo "Erro ao excluir";
	}

?>