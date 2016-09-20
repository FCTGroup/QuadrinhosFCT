<?php

	require_once("../BD/usuarioDAO.php");

	$login = $_POST["login"];
	$senha = $_POST["senha"];


	$usuarioDAO = new UsuarioDAO();
	if ($usuarioDAO->validate($login, md5($senha)) == $login){
		session_start();
		$_SESSION["login"] = $login;
		return include("../manager_conteudo.php");
	}
	else
		return "";

?>