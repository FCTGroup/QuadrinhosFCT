
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="quadrinho.js"></script>

<p id="resultadoForm"></p>
<form id="quadrinhoForm" method="POST" action="../formsListagem/quadrinho.php">

<?php 

if(isset($_POST["nome"])){
	$nome = $_POST["nome"]; 
	$numero = $_POST['numero'];
} 

require_once("../BD/quadrinhoDAO.php");
require_once("../Entities/quadrinho.php");

$quadrinhoDAO = new QuadrinhoDAO();


$quadrinho = $quadrinhoDAO->fetchById($nome,$numero);

require_once("../BD/editoraDAO.php");
require_once("../Entities/editora.php");

$editoraDAO = new EditoraDAO();

require_once("../BD/licenciadorDAO.php");
require_once("../Entities/licenciador.php");

$licenciadorDAO = new LicenciadorDAO();

require_once("../BD/categoriaDAO.php");
require_once("../Entities/categoria.php");

$categoriaDAO = new CategoriaDAO();

echo '<p id="nomeLabel"> Nome: <input type="text" id="nomeTxt" name="nomeTxt" value='.$nome.'> </p>';
echo '<p id="numeroLabel"> Número: <input type="text" id="numeroTxt" name="numeroTxt" value='.$numero.'> </p>';
echo '<p id="dataLabel"> Data: <input type="text" id="dataTxt" name="dataTxt" value='.$quadrinho->getData().'> </p>';

echo '<p id="editoraLabel"> Editora: <select id="editoraSel" name="editoraSel" >';
foreach($editoraDAO->fetchAll() as $editoraOp){
	echo '<option value="'.$editoraOp->getId().'"';
	if($editoraOp->getId() == $quadrinho->getEditora()) echo 'selected';
	echo '>'.$editoraOp->getName().'</option>';
}
echo '</select></p>';

echo '<p id="licenciadorLabel"> Licenciador: <select id="licenciadorSel" name="licenciadorSel" >';
foreach($licenciadorDAO->fetchAll() as $licenciadorOp){
	echo '<option ';
	if($licenciadorOp->getId() == $quadrinho->getLicenciador()) echo 'selected="selected"';
	echo 'value="'.$licenciadorOp->getId().'"';
	echo '>'.$licenciadorOp->getName().'</option>';
}
echo '</select></p>';

echo '<p id="categoriaLabel"> Categoria: <select id="categoriaSel" name="categoriaSel" >';
foreach($categoriaDAO->fetchAll() as $categoriaOp){
	echo '<option value="'.$categoriaOp->getId().'"';
	if($categoriaOp->getId() == $quadrinho->getCategoria()) echo 'selected';
	echo '>'.$categoriaOp->getName().'</option>';
}
echo '</select></p>';

require_once("../BD/generoDAO.php");
require_once("../Entities/genero.php");

$generoDAO = new GeneroDAO();

echo '<p id="generoLabel"> Gênero: <select id="generoSel" name="generoSel" >';
foreach($generoDAO->fetchAll() as $generoOp){
	echo '<option value="'.$generoOp->getId().'"';
	if($generoOp->getId() == $quadrinho->getGenero()) echo 'selected';
	echo '>'.$generoOp->getName().'</option>';
}
echo '</select></p>';

require_once("../BD/statusDAO.php");
require_once("../Entities/status.php");

$statusDAO = new StatusDAO();

echo '<p id="statusLabel"> Status: <select id="statusSel" name="statusSel" >';
foreach($statusDAO->fetchAll() as $statusOp){
	echo '<option value="'.$statusOp->getId().'"';
	if($statusOp->getId() == $quadrinho->getStatus()) echo 'selected';
	echo '>'.$statusOp->getName().'</option>';
}
echo '</select></p>';

require_once("../BD/formatoDAO.php");
require_once("../Entities/formato.php");

$formatoDAO = new FormatoDAO();

echo '<p id="formatoLabel"> Formato: <select id="formatoSel" name="formatoSel" >';
foreach($formatoDAO->fetchAll() as $formatoOp){
	echo '<option value="'.$formatoOp->getId().'"';
	if($formatoOp->getId() == $quadrinho->getFormato()) echo 'selected';
	echo '>'.$formatoOp->getName().'</option>';
}
echo '</select></p>';

echo '<p id="num_paginasLabel"> Número de Páginas: <input type="text" id="num_paginasTxt" name="num_paginasTxt" value='.$quadrinho->getNumPaginas().'> </p>';
echo '<p id="precoLabel"> Preço: <input type="text" id="precoTxt" name="precoTxt" value='.$quadrinho->getPreco().'> </p>';
echo '<p id="capaLabel"> Capa: <input type="text" id="capaTxt" name="capaTxt" value='.$quadrinho->getCapa().'> </p>';
echo '<p id="descricaoLabel"> Descricação: <input type="text" id="descricaoTxt" name="descricaoTxt" value='.$quadrinho->getDescricao().'> </p>';



if($nome != null && $numero != null){
	echo '<input type="hidden" name="hiddenNome" value="'.$nome.'"/>';
	echo '<input type="hidden" name="hiddenNumero" value="'.$numero.'"/>';
	echo '<input type="button" id="atualizarButton" name="atualizarButton" value="Atualizar"/>';
	echo '<input type="button" id="excluirButton" name="excluirButton" value="Excluir"/>';
}
else {
	echo '<input type="button" id="cadastrarButton" name="cadastrarButton" value="Cadastrar"/>';
}

echo '<a href="/web/QuadrinhosFCT/formsListagem/quadrinho.php"><input type="button" value="Voltar"/></a>';
?>

</form>