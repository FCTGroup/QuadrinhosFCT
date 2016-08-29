<?php

	$connection;

	function connect($host, $dbname, $user, $password){
		try{
			$connection = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
		}catch(PDOExcetion $e){
			print "Erro: <code>" . $e->getMessage() . "</code>";
		}
	}

	function desconnect(){
		$connection = null;
	}

?>