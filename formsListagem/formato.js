$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var formato = $("#"+id);
		var nome = $(formato).find('[name="nome"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#formatoForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#formatoForm").submit();
	});

});