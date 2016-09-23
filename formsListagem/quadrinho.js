$(document).ready(function(){

	$(".editarButton").click(function(){
		var quadrinho = $("#id"+$(this).attr('id'));

		var nome = $(quadrinho).find('[name="nome"]').html();
		var numero = $(quadrinho).find('[name="numero"]').html();
		
		$("#nome").val(nome);
		$("#numero").val(numero);

		$("#quadrinhoForm").submit();
	});

	$(".novoButton").click(function(){
		$("#nome").val(null);
		$("#numero").val(null);
		/*$("#data").val(null);
		$("#editora").val(null);
		$("#licenciador").val(null);
		$("#categoria").val(null);
		$("#genero").val(null);
		$("#status").val(null);
		$("#num_paginas").val(null);
		$("#formato").val(null);
		$("#preco").val(null);
		$("#capa").val(null);
		$("#descricao").val(null);*/
		$("#quadrinhoForm").submit();
	});

});