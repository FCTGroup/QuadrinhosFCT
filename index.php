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
	<script type="text/javascript" src="js/jqueryCarrinho.js"></script>
</header>

<body>
	<?php include_once("header.php"); ?>

	<div id="postagens">
		<?php 

			require_once("Entities/quadrinhoApresentacao.php");

			$quadrinhoArray = array();
			$quadrinhoArray[] = new QuadrinhoApresentacao("Batman v1", 2, "03/02/2016", 0, "Panini", 
				0, "DC Comics", 0, "Periódico", 0, "Ação", 0, "Concluído", 92, 0, "Americano", 
				"27x30cm", 19.90, "imagens/batmanv101.jpeg", "O Retorno do Cavaleiro das Trevas");

			$quadrinhoArray[] = new QuadrinhoApresentacao("iZombie", 1, "02/2015", 0, "Panini", 
				0, "Vertigo", 0, "Edição Especial", 0, "Terror", 0, "Concluído", 92, 0, "Americano", 
				"27x30cm", 19.90, "imagens/izombie1.jpeg", "Morri pro mundo");

			echo '<div id="ultimosQuadrinhosTitulo"><p>Últimos Quadrinhos</p></div>';

			$i = 0;
			foreach($quadrinhoArray as $quadrinho){

				echo '<div id="ultimosQuadrinhos">';

				echo '<form id="quadrinho'.$i.'">';

				echo '<input type="hidden" id="nome" value="'.$quadrinho->getNome().'"/>';

				echo '<input type="hidden" id="numero" value="'.$quadrinho->getNumero().'"/>';

				echo '<table>';

				echo '<tr>';

				echo '<td rowspan="9" class="capa"> <img alt="'.$quadrinho->getNome()."-".$quadrinho->getNumero().'" src="'.$quadrinho->getCapa().'" title="'.$quadrinho->getNome().'" /> </td>';
				echo '<td colspan="2" class="titulo"> <p>'.$quadrinho->getNome()." - Nº ".$quadrinho->getNumero().'</p></td>';

				echo '<tr/>';

				echo '<tr>';

				echo '<td class="comicInfo"> Editora: '.$quadrinho->getEditoraNome().'</td><td class="comicInfo"> Número de Páginas: '.$quadrinho->getNumPaginas().'</td>';

				echo '<tr/>';
				
				echo '<tr>';

				echo '<td class="comicInfo"> Licenciador: '.$quadrinho->getLicenciadorNome().'</td><td class="comicInfo"> Preço: R$ '.$quadrinho->getPreco().'</td>';

				echo '<tr/>';

				echo '<tr>';	

				echo '<td class="comicInfo" colspan="2"> Quantidade: <input type="text" value="1" id="quantidadeComic"/><input type="button" id="'.$i.'"  class="adicionarAoCarrinho" value="Adicionar ao carrinho"/></td>';

				echo '<tr/>';

				echo '<tr> <td></td><td><td/></tr>';

				echo '</table>';

				echo '</form>';

				$i++;

				echo '</div>';

			}

		?>
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