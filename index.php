<?php 
ini_set("display_errors",0);
error_reporting(0);
if($_GET["acao"] == logar){

	$logincorreto = admin;
	$senhacorreta = '12345';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	if($usuario == $logincorreto && $senha == $senhacorreta){
	setcookie("logado","1");
	echo '
		<script type="text/javascript">
	    alert("Redirecionando...");
	    location = "logado.php"
		</script>
	';
	}
	else{
	echo '
		<script type="text/javascript">
	    alert("Usuario ou Senha incorreto, digite novamente ...");
	    location = "index.php"
		</script>
	';
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Login</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
	<h1>Logar!</h1>
	<form method="post" action="?acao=logar">
		<label for="usuario">Usuario
			<input type="text" name="usuario" placeholder="Usuario" size="48">
		</label><br/>
		<label for="usuario">Senha
			<input type="password" name="senha" placeholder="Senha" size="48">
		</label><br/>
		<input id="botao" type="submit" value="Logar">
	</form>
</div>
</body>
</html>