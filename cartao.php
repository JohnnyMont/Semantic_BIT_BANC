<?php
session_start();
$_SESSION['usuario'] = "Teste";
$_SESSION['id'] = "1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cartao</title>
</head>
<body>
	<center>
		<h1>Cartao</h1>
		<a href="cartao_cadastro.php">Cadastro</a>
		<br>
		<a href="cartao_consultar.php">Consultar</a>
		<br>
	</center>
</body>
</html>