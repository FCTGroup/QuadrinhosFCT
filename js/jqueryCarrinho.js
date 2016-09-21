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

});