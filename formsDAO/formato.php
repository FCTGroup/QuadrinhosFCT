
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="formato.js"></script>

<p id="resultadoForm"></p>
<form id="formatoForm"  method="POST" action="../formsListagem/formato.php">

<?php 

$nome = null;
$id = null;

if(isset($_POST["id"])){
	$nome = $_POST["nome"]; 
	$id = $_POST["id"];

	require_once("../Entities/formato.php");
	require_once("../BD/formatoDAO.php");

	$DAOFormato = new FormatoDAO();
	$formato = $DAOFormato->fetchById($id);

	$descricao = $formato->getDescription();

} 
echo '<input type="hidden" id="idHidden" name="idHidden" value="'.$id.'"></p>';
echo '<p id="nomeLabel"> Nome: <input type="text" id="nomeTxt" name="nomeTxt" value='.$nome.'> </p>';
echo '<p id="descricaoLabel"> Descrição: <input type="text" id="descricaoTxt" name="descricaoTxt" value='.$descricao.'> </p>';


if($id != null){
	echo '<input type="button" id="atualizarButton" name="atualizarButton" value="Atualizar"/>';
	echo '<input type="button" id="excluirButton" name="excluirButton" value="Excluir"/>';
}
else {
	echo '<input type="button" id="cadastrarButton" name="cadastrarButton" value="Cadastrar"/>';
}

echo '<a href="../formsListagem/formato.php"><input type="button" value="Voltar"/></a>';
?>

</form>