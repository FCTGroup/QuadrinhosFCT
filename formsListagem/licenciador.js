$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var licenciador = $("#"+id);
		var nome = $(licenciador).find('[name="nome"]').html();
		var site = $(licenciador).find('[name="site"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#site").val("\""+site+"\"");
		$("#licenciadorForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#site").val(null);
		$("#licenciadorForm").submit();
	});

});