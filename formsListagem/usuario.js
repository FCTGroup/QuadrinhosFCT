$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var status = $("#"+id);
		var nome = $(status).find('[name="nome"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#statusForm").submit();
	});

	$(".excluirButton").click(function(){
		$("#nome").val(null);
		$("#usuarioForm").submit();
	});

});