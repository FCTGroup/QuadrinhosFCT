$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var categoria = $("#"+id);
		var nome = $(categoria).find('[name="nome"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#categoriaForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#categoriaForm").submit();
	});

});