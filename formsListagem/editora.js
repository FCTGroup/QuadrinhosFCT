$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var editora = $("#"+id);
		var nome = $(editora).find('[name="nome"]').html();
		var address = $(editora).find('[name="address"]').html();
		var description = $(editora).find('[name="description"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#address").val("\""+address+"\"");
		$("#description").val("\""+description+"\"");
		$("#editoraForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#address").val(null);
		$("#description").val(null);
		$("#editoraForm").submit();
	});

});