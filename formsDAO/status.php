
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="status.js"></script>

<p id="resultadoForm"></p>
<form id="statusForm" method="POST" action="../formsListagem/status.php">

<?php 

$nome = null;
$id = null;

if(isset($_POST["id"])){
	$nome = $_POST["nome"]; 
	$id = $_POST["id"];
} 
echo '<input type="hidden" id="idHidden" name="idHidden" value="'.$id.'"></p>';
echo '<p id="nomeLabel"> Nome: <input type="text" id="nomeTxt" name="nomeTxt" value='.$nome.'> </p>';


if($id != null){
	echo '<input type="button" id="atualizarButton" name="atualizarButton" value="Atualizar"/>';
	echo '<input type="button" id="excluirButton" name="excluirButton" value="Excluir"/>';
}
else {
	echo '<input type="button" id="cadastrarButton" name="cadastrarButton" value="Cadastrar"/>';
}

echo '<a href="/web/QuadrinhosFCT/formsListagem/status.php"><input type="button" value="Voltar"/></a>';
?>

</form>