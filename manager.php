<?php

	session_start();

?>
<html>
<head>
<title>Manager</title>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jqueryManager.js"></script>
</head>
<body>

<div id="manager">
<?php

	if(isset($_SESSION["login"])){	
		include_once("manager_conteudo.php");
	}
	else{
		include_once("manager_login.php");
	}
?>
</div>
</body>
</html>