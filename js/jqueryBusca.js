$(document).ready(function(){

	$("input#btBuscar").click(function(){
		var licenciadorCBArray = document.getElementsByName("licenciadorCB");
		var editoraCBArray = document.getElementsByName("editoraCB");

		var licenciadorArray = [];
		var editoraArray = [];

		for(var i = 0; i < licenciadorCBArray.length; i++){
			if(licenciadorCBArray[i].checked == true)
				licenciadorArray.push(licenciadorCBArray[i].value);
		}

		for(var i = 0; i < editoraCBArray.length; i++){
			if(editoraCBArray[i].checked == true)
				editoraArray.push(editoraCBArray[i].value);
		}

		$("input#licenciadores").val(licenciadorArray);
		$("input#editoras").val(editoraArray);
		
		$("form#formPesquisaRapida").submit();
	});
	
});