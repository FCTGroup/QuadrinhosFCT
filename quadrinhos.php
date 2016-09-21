<?php

	$nome = "";
	$editoras;
	$licenciadores;

	if(isset($_GET["textNome"]))
		$nome = $_GET["textNome"];
	if(isset($_GET["licenciadores"]))
		$licenciadores = $_GET["licenciadores"];
	if(isset($_GET["editoras"]))
		$editoras = $_GET["editoras"];

	echo $nome;
	$licenciadoresArray = explode(",", $licenciadores);
	$editorasArray = explode(",", $editoras);
	foreach($licenciadoresArray as $licenciador)
		echo $licenciador;
	foreach($editorasArray as $editora)
		echo $editora;

?>