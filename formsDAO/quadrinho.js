$(document).ready(function(){

	$('#excluirButton').click(function(){
		
		$.ajax({
		type: "POST",
		url: "excluirQuadrinho.php",
		datatype:"html",
		data:{
			"dadosForm": $("#quadrinhoForm").serialize()},
		success: function(resposta){
			$("#resultadoForm").hide();
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#quadrinhoForm").submit()}, 1000)},
		error: function (request, status, errorThrown) {
			alert(request+","+status+","+errorThrown);}
		});
	});

	$('#atualizarButton').click(function(){

		if(($("#nomeTxt").val() != "") && ($("#numeroTxt").val() != "")  && ($("#dataTxt").val() != "") && ($("#editoraSel").val() != "") && ($("#licenciadorSel").val() != "") &&  ($("#categoriaSel").val() != "")
		&& ($("#generoSel").val() != "") && ($("#statusSel").val() != "") && ($("#num_paginasTxt").val() != "") && ($("#formatoSel").val() != "") &&
		($("#precoTxt").val() != "") && ($("#capaTxt").val() != "") && ($("#descricaoTxt").val() != "")){

			$.ajax({
			type: "POST",
			url: "atualizarQuadrinho.php",
			datatype:"html",
			data:{
				"dadosForm": $("#categoriaForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").hide();
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#quadrinhoForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}
	});

	$('#cadastrarButton').click(function(){

		if(($("#nomeTxt").val() != "") && ($("#numeroTxt").val() != "")  && ($("#dataTxt").val() != "") && ($("#editoraSel").val() != "") && ($("#licenciadorSel").val() != "") &&  ($("#categoriaSel").val() != "")
		&& ($("#generoSel").val() != "") && ($("#statusSel").val() != "") && ($("#num_paginasTxt").val() != "") && ($("#formatoSel").val() != "") &&
		($("#precoTxt").val() != "") && ($("#capaTxt").val() != "") && ($("#descricaoTxt").val() != "")){

			$.ajax({
			type: "POST",
			url: "inserirQuadrinho.php",
			datatype:"html",
			data:{
				"dadosForm": $("#quadrinhoForm").serialize()},
			success: function(resposta){
				$("#resultadoForm").hide();
				$("#resultadoForm").empty();
				$("#resultadoForm").append(resposta);
				$("#resultadoForm").css("color","#00FF00");
				$("#resultadoForm").fadeIn(1000);
				setTimeout(function() {$("#quadrinhoForm").submit()}, 1000)},
			error: function (request, status, errorThrown) {
				alert(request+","+status+","+errorThrown);}
			});


		}

	});

});