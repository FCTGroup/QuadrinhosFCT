$(document).ready(function(){

	$('#excluirButton').click(function(){
		
		$.ajax({
		type: "POST",
		url: "excluirStatus.php",
		datatype:"html",
		data:{
			"dadosForm": $("#statusForm").serialize()},
		success: function(resposta){
			$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#categoriaForm").submit()}, 1000)},
		error: function (request, status, errorThrown) {
			alert(request+","+status+","+errorThrown);}
		});
	});

	$('#atualizarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "atualizarStatus.php",
			datatype:"html",
			data:{
				"dadosForm": $("#statusForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#categoriaForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}
	});

	$('#cadastrarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "inserirStatus.php",
			datatype:"html",
			data:{
				"dadosForm": $("#statusForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#categoriaForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}

	});

});