$(document).ready(function(){

	$('#excluirButton').click(function(){
		
		$.ajax({
		type: "POST",
		url: "excluirLicenciador.php",
		datatype:"html",
		data:{
			"dadosForm": $("#licenciadorForm").serialize()},
		success: function(resposta){
			$("#resultadoForm").empty();
			$("#resultadoForm").append(resposta);},
		error: function (request, status, errorThrown) {
			alert(request+","+status+","+errorThrown);}
		});
	});

	$('#atualizarButton').click(function(){

		if($("#nomeTxt").val() != "" && $("#siteTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "atualizarLicenciador.php",
			datatype:"html",
			data:{
				"dadosForm": $("#licenciadorForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}
	});

	$('#cadastrarButton').click(function(){

		if($("#nomeTxt").val() != "" && $("#siteTxt").val() != ""){

			$.ajax({
			type: "POST",
			url: "inserirLicenciador.php",
			datatype:"html",
			data:{
				"dadosForm": $("#licenciadorForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}

	});

});