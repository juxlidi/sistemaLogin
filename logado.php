<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
	include("verifica.php");

	if($_GET["acao"] == logout){
		setcookie("logado","");
		echo '
			<script type="text/javascript">
		    alert("Voce foi deslogado com sucesso");
		    location = "index.php"
			</script>
		';
	}
	?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>Logado</h1>

<a href="?acao=logout">Logout</a>
	
</body>
</html>