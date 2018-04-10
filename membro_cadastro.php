<?php
session_start();
$_SESSION['usuario'] = "Teste";
$_SESSION['id'] = "1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Membros</title>
</head>
<body>
	<center>
		<form action="processar.php?id=<?=$_SESSION['id']?>&tipo=membro&crud=cadastro" method="post">
			<label for="nomeCompleto">Nome Completo</label>
			<input type="text" name="nomeCompleto" required>
			<br>
			<label for="email">email</label>
			<input type="email" name="email" required>
			<br>
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" required>
			<br>
			<label for="dataNasc">Data de Nascimento</label>
			<input type="date" name="dataNasc" required>
			<br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</center>
</body>
</html>