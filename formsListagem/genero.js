$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var genero = $("#"+id);
		var nome = $(genero).find('[name="nome"]').html();
		var address = $(genero).find('[name="address"]').html();
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#address").val("\""+address+"\"");
		$("#generoForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#address").val(null);
		$("#generoForm").submit();
	});

});