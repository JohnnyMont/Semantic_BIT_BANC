<?php
session_start();
$_SESSION['usuario'] = "Teste";
$_SESSION['id'] = "1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membro</title>
</head>
<body>
	<center>
		<h1>Membro</h1>
		<a href="membro_cadastro.php">Cadastro</a>
		<br>
		<a href="membro_consultar.php">Consultar</a>
		<br>
	</center>
</body>
</html>