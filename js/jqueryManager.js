$(document).ready(function(){

	$("div#manager").on('click', 'input#login',function(){
		var login = $("#txtlogin").val();
		var senha = $("#password").val();

		$.ajax({
			url: "ajaxPHP/login.php",
			type: "POST",
			dataType:"html",
			data:{login:login,senha:senha},
			success:function(retorno){
				if(retorno == false){
					$("div#manager p#message").hide();
					$("div#manager p#message").html('login ou senha inválidos');
					$("div#manager p#message").css("color","#FF0000");
					$("div#manager p#message").fadeIn(1000);
				}
				else
					$("div#manager").html(retorno);
			}
		});
	});

	$("div#manager").on('click', 'input#logout', function(){	
		$.ajax({

			url: "ajaxPHP/logout.php",
			dataType:"html",
			success:function(retorno){
				if(retorno!="")
					$("div#manager").html(retorno);
			}

		});
	});

});