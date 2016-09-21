$(document).ready(function(){

	$("input.adicionarAoCarrinho").click(function(){
		var id = $(this).attr('id');
		var nome = $("form#quadrinho"+id+" input#nome").val();
		var numero = $("form#quadrinho"+id+" input#numero").val();
		var quantidade = $("form#quadrinho"+id+" input#quantidadeComic").val();

		$.ajax({
			url: "ajaxPHP/carrinho.php",
			type: "POST",
			dataType:"html",
			data:{nome:nome,numero:numero,quantidade:quantidade},
			success:function(retorno){
				alert(retorno);
				var quantidadeTotal = parseInt($("#quantidadeTotalCarrinho").val()) + parseInt(quantidade);
				$("#quantidadeTotalCarrinho").val(quantidadeTotal);
				$("p#carrinho").html('<a href="carrinho.php">Carrinho('+quantidadeTotal+')</a>');
			}
		});
	});

	$("input.atualizarQuantidade").click(function(){
		var id = $(this).attr('id');
		var nome = $("form#quadrinho"+id+" input#nome").val();
		var numero = $("form#quadrinho"+id+" input#numero").val();
		var quantidade = $("form#quadrinho"+id+" input#quantidadeComic").val();		

		$.ajax({
			url: "ajaxPHP/atualizarCarrinho.php",
			type: "POST",
			dataType:"html",
			data:{nome:nome,numero:numero,quantidade:quantidade},
			success:function(retorno){
				var mensagem = retorno.slice(0,retorno.indexOf(","));
				var quantidadeTotal = parseInt(retorno.slice(retorno.indexOf(",")+1)) + parseInt($("#quantidadeTotalCarrinho").val());
				alert(mensagem);
				$("#quantidadeTotalCarrinho").val(quantidadeTotal);
				$("p#carrinho").html('<a href="carrinho.php">Carrinho('+quantidadeTotal+')</a>');
				if(quantidade == 0){
					$("form#quadrinho"+id).fadeOut(1000);
				}
			}
		});
	});

	$("input#btComprar").click(function(){
		alert("Aqui é transferido a um serviço externo para compra");
	});

});