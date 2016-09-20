$(document).ready(function(){

	$(".editarButton").click(function(){
		var id = $(this).attr('id');
		var quadrinho = $("#"+id);
		var nome = $(quadrinho).find('[name="nome"]').html();
		var numero = $(quadrinho).find('[name="numero"]').html();
		var data = $(quadrinho).find('[name="data"]').html();
		var editora = $(quadrinho).find('[name="editora"]').html();
		var licenciador = $(quadrinho).find('[name="licenciador"]').html();
		var categoria = $(quadrinho).find('[name="categoria"]').html();
		var genero = $(quadrinho).find('[name="genero"]').html();
		var status = $(quadrinho).find('[name="num_paginas"]').html();
		var formato = $(quadrinho).find('[name="formato"]').html();
		var preco = $(quadrinho).find('[name="preco"]').html();
		var capa = $(quadrinho).find('[name="capa"]').html();
		var descricao = $(quadrinho).find('[name="descricao"]').html();
		
		$("#id").val(id);
		$("#nome").val("\""+nome+"\"");
		$("#numero").val("\""+numero+"\"");
		$("#data").val("\""+data+"\"");
		$("#editora").val("\""+editora+"\"");
		$("#licenciador").val("\""+licenciador+"\"");
		$("#categoria").val("\""+categoria+"\"");
		$("#genero").val("\""+genero+"\"");
		$("#status").val("\""+status+"\"");
		$("#num_paginas").val("\""+num_paginas+"\"");
		$("#formato").val("\""+formato+"\"");
		$("#preco").val("\""+preco+"\"");
		$("#capa").val("\""+capa+"\"");
		$("#descricao").val("\""+descricao+"\"");
		$("#quadrinhoForm").submit();
	});

	$(".novoButton").click(function(){
		$("#id").val(null);
		$("#nome").val(null);
		$("#numero").val(null);
		$("#data").val(null);
		$("#editora").val(null);
		$("#licenciador").val(null);
		$("#categoria").val(null);
		$("#genero").val(null);
		$("#status").val(null);
		$("#num_paginas").val(null);
		$("#formato").val(null);
		$("#preco").val(null);
		$("#capa").val(null);
		$("#descricao").val(null);
		$("#quadrinhoForm").submit();
	});

});