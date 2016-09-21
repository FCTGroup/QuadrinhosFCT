<!--<img id="banner" src="imagens/banner.png" alt="Banner" title="QuadrinhosFCT" width="100%"/>-->
<div id="header">

	<?php session_start();

	require_once("Entities/quadrinho.php");

	$quadrinhoCarrinho = null;
	$quantidadeCarrinho = 0;
 
	if(isset($_SESSION["carrinho"])){		
		$quadrinhoCarrinho = $_SESSION["carrinho"];
		$quantidadeCarrinho = sizeof($quadrinhoCarrinho);

	}


	?>

	<p id="licenciadora" class="headerItem"> </p>
	<p id="carrinho" class="headerItem"><a href="carrinho.php">Carrinho(<?php echo $quantidadeCarrinho ?>)</a></p>
	<p id="manager" class="headerItem"><a href="manager.php"> Área gerencial </a></p>

</div>