<?php
	$login = $_SESSION["login"];
	echo '<p>'.$login.' <input type="button" value="logout" id="logout"/>';
	echo '<a href="index.php"><input type="button" value="voltar"></a></p>';

?>

	<a href="formsListagem/categoria.php"><p>Categoria</p></a>
	<a href="formsListagem/editora.php"><p>Editora</p></a>
	<a href="formsListagem/formato.php"><p>Formato</p></a>
	<a href="formsListagem/genero.php"><p>Genero</p></a>
	<a href="formsListagem/licenciador.php"><p>Licenciador</p></a>
	<a href="formsListagem/status.php"><p>Status</p></a>
	<a href="formsListagem/quadrinho.php"><p>Quadrinho</p></a>
	<a href="formsListagem/usuario.php"><p>Usuário</p></a>