<?php

	require_once("BD/licenciadorDAO.php");
	require_once('Entities/licenciador.php');
	require_once("BD/editoraDAO.php");
	require_once('Entities/editora.php');

?>
<html>
<header>
	<title>Quadrinhos FCT</title>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/jqueryBusca.js"></script>
</header>

<body>
	<?php include_once("header.php"); ?>

	<div id="postagens">
		<!--<div id="ultimosQuadrinhos">

		</div>
		<div id="ultimosQuadrinhos">
			
		</div>-->
	</div>

	<div id="pesquisaRapida">

	<p>Pesquisa rápida</p>

	<form action="quadrinhos.php" id="formPesquisaRapida" method="GET">

		<input type="text" id="textNome" name="textNome"/>
		<input type="hidden" id="licenciadores" name="licenciadores"/>
		<input type="hidden" id="editoras" name="editoras"/>

		<p> Licenciador </p>

		<?php

		$DAOLicenciador = new LicenciadorDAO();
		$licenciadorArray = $DAOLicenciador->fetchAll();

		foreach($licenciadorArray as $licenciador){
		
			echo '<p> <input type="checkbox" id="licenciadorCB" name="licenciadorCB" value="'.$licenciador->getId().'"</input>'. $licenciador->getName().'</p>';

		}?>

		<p> Editora </p>

		<?php

		$DAOEditora = new EditoraDAO();
		$editoraArray = $DAOEditora->fetchAll();

		foreach($editoraArray as $editora){
		
			echo '<p> <input type="checkbox" id="editoraCB" name="editoraCB" value="'.$editora->getId().'"</input>'. $editora->getName().'</p>';

		}?>
		<input type="button" id="btBuscar" name="btBuscar" value="go"/>
	</form>
	</div>


	<?php include_once("footer.php"); ?>
</body>
</html>