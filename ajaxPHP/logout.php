<?php
	
	session_start();

	unset($_SESSION["login"]);

	return include("../manager_login.php");

?>