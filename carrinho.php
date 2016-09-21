<html>
<head>
<title>QuadrinhosFCT - Carrinho</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/carrinho.css"/>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jqueryCarrinho.js"></script>
</head>
<body>

<?php 

	include_once("header.php");

	$quadrinhoCarrinho = null;
	$quantidadeCarrinho = 0;

	echo '<div id="itemsCarrinho">';
 
	if(isset($_SESSION["carrinho"])){		
		$quadrinhoCarrinho = $_SESSION["carrinho"];
		$i = 0;
		foreach($quadrinhoCarrinho as $quadrinho){
			$quantidade = $quadrinho['quantidade'];
			$nome = $quadrinho['nome'];
			$numero = $quadrinho['numero']; 
			
			echo '<div id="quadrinho">';

			echo '<form id="quadrinho'.$i.'" method="POST" action="">';

			echo '<input type="hidden" id="nome" value="'.$nome.'"/>';

			echo '<input type="hidden" id="numero" value="'.$numero.'"/>';

			echo '<table>';

			echo '<tr>';

			echo '<td>'.$nome.' Nº'.$numero.'</td><td> Comprar x<input type="text" id="quantidadeComic" value="'.$quantidade.'"/><td><input type="button" value="Atualizar" class="atualizarQuantidade" id="'.$i++.'"</td></td>';

			echo '</tr>';

			echo '</table>';

			echo '</form>';

			echo '</div>';
		}

	}

	echo '</div>';

?>

<p><input type="button" value="Finalizar Comprar" id="btComprar"/></p>
</body>