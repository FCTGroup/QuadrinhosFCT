
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="quadrinho.js"></script>

<p id="resultadoForm"></p>
<form id="quadrinhoForm" method="POST" action="../formsListagem/quadrinho.php">

<?php 

$nome = null;
$numero = null;
$data= null;
$editora= null;
$licenciador= null;
$categoria= null;
$genero= null;
$status= null;
$num_paginas= null;
$formato= null;
$preco= null;
$capa= null;
$descricao= null;
$id = null;

if(isset($_POST["id"])){
	$nome = $_POST["nome"]; 
	$numero = $_POST['numero'];
	$data= $_POST['data'];
	$editora= $_POST['editora'];
	$licenciador= $_POST['licenciador'];
	$categoria= $_POST['categoria'];
	$genero= $_POST['genero'];
	$status= $_POST['status'];
	$num_paginas= $_POST['num_paginas'];
	$formato= $_POST['formato'];
	$preco= $_POST['preco'];
	$capa= $_POST['capa'];
	$descricao= $_POST['descricao'];
	$id = $_POST["id"];
} 
echo '<input type="hidden" id="idHidden" name="idHidden" value="'.$id.'"/>';
echo '<p id="nomeLabel"> Nome: <input type="text" id="nomeTxt" name="nomeTxt" value='.$nome.'> </p>';
echo '<p id="numeroLabel"> Número: <input type="text" id="numeroTxt" name="numeroTxt" value='.$numero.'> </p>';
echo '<p id="dataLabel"> Data: <input type="text" id="dataTxt" name="dataTxt" value='.$data.'> </p>';
echo '<p id="editoraLabel"> Editora: <input type="text" id="editoraTxt" name="editoraTxt" value='.$editora.'> </p>';
echo '<p id="licenciadorLabel"> Licenciador: <input type="text" id="licenciadorTxt" name="licenciadorTxt" value='.$licenciador.'> </p>';
echo '<p id="categoriaLabel"> Categoria: <input type="text" id="categoriaTxt" name="categoriaTxt" value='.$categoria.'> </p>';
echo '<p id="generoLabel"> Genero: <input type="text" id="generoTxt" name="generoTxt" value='.$genero.'> </p>';
echo '<p id="statusLabel"> Status: <input type="text" id="statusTxt" name="statusTxt" value='.$status.'> </p>';
echo '<p id="num_paginasLabel"> Número de Páginas: <input type="text" id="num_paginasTxt" name="num_paginasTxt" value='.$num_paginas.'> </p>';
echo '<p id="formatoLabel"> Foramto: <input type="text" id="foramtoTxt" name="formatoTxt" value='.$formato.'> </p>';
echo '<p id="precoLabel"> Preço: <input type="text" id="precoTxt" name="precoTxt" value='.$preco.'> </p>';
echo '<p id="capaLabel"> Capa: <input type="text" id="capaTxt" name="capaTxt" value='.$capa.'> </p>';
echo '<p id="descricaoLabel"> Descricação: <input type="text" id="descricaoTxt" name="descricaoTxt" value='.$descricao.'> </p>';



if($id != null){
	echo '<input type="button" id="atualizarButton" name="atualizarButton" value="Atualizar"/>';
	echo '<input type="button" id="excluirButton" name="excluirButton" value="Excluir"/>';
}
else {
	echo '<input type="button" id="cadastrarButton" name="cadastrarButton" value="Cadastrar"/>';
}

echo '<a href="/web/QuadrinhosFCT/formsListagem/quadrinho.php"><input type="button" value="Voltar"/></a>';
?>

</form>