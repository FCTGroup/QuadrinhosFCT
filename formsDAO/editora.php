
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="editora.js"></script>

<p id="resultadoForm"></p>
<form id="editoraForm"  method="POST" action="../formsListagem/editora.php">

<?php 

$nome = null;
$id = null;

if(isset($_POST["id"])){
	$nome = $_POST["nome"]; 
	$id = $_POST["id"];

	require_once("../Entities/editora.php");
	require_once("../BD/editoraDAO.php");

	$DAOEditora = new EditoraDAO();
	$editora = $DAOEditora->fetchById($id);

	$site = $editora->getAddress();
	$descricao = $editora->getDescription();

} 
echo '<input type="hidden" id="idHidden" name="idHidden" value="'.$id.'"></p>';
echo '<p id="nomeLabel"> Nome: <input type="text" id="nomeTxt" name="nomeTxt" value='.$nome.'> </p>';
echo '<p id="siteLabel"> Site: <input type="text" id="siteTxt" name="siteTxt" value='.$site.'> </p>';
echo '<p id="descricaoLabel"> Descrição: <input type="text" id="descricaoTxt" name="descricaoTxt" value='.$descricao.'> </p>';


if($id != null){
	echo '<input type="button" id="atualizarButton" name="atualizarButton" value="Atualizar"/>';
	echo '<input type="button" id="excluirButton" name="excluirButton" value="Excluir"/>';
}
else {
	echo '<input type="button" id="cadastrarButton" name="cadastrarButton" value="Cadastrar"/>';
}

echo '<a href="../formsListagem/editora.php"><input type="button" value="Voltar"/></a>';
?>

</form>