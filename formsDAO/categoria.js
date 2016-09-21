$(document).ready(function(){

	$('#excluirButton').click(function(){
		
		$.ajax({
		type: "POST",
		url: "excluirCategoria.php",
		datatype:"html",
		data:{
			"dadosForm": $("#statusForm").serialize()},
		success: function(resposta){
			$("#resultadoForm").empty();
			$("#resultadoForm").append(resposta);},
		error: function (request, status, errorThrown) {
			alert(request+","+status+","+errorThrown);}
		});
	});

	$('#atualizarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "atualizarCategoria.php",
			datatype:"html",
			data:{
				"dadosForm": $("#categoriaForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}
	});

	$('#cadastrarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "inserirCategoria.php",
			datatype:"html",
			data:{
				"dadosForm": $("#categoriaForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}

	});

});