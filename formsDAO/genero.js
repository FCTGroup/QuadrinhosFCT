$(document).ready(function(){

	$('#excluirButton').click(function(){
		
		$.ajax({
		type: "POST",
		url: "excluirGenero.php",
		datatype:"html",
		data:{
			"dadosForm": $("#generoForm").serialize()},
		success: function(resposta){
			$("#resultadoForm").empty();
			$("#resultadoForm").append(resposta);
			$("#resultadoForm").css("color","#00FF00");
			$("#resultadoForm").fadeIn(1000);
			setTimeout(function() {$("#generoForm").submit()}, 1000)},
		error: function (request, status, errorThrown) {
			alert(request+","+status+","+errorThrown);}
		});
	});

	$('#atualizarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "atualizarGenero.php",
			datatype:"html",
			data:{
				"dadosForm": $("#generoForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#generoForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}
	});

	$('#cadastrarButton').click(function(){

		if($("#nomeTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "inserirGenero.php",
			datatype:"html",
			data:{
				"dadosForm": $("#generoForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#generoForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}

	});

});