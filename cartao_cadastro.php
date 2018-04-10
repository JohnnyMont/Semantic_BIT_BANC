<?php
session_start();
$_SESSION['usuario'] = "Teste";
$_SESSION['id'] = "1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Cartao</title>
</head>
<body>
	<center>
		<div>
			<form action="processar.php?id=<?=$_SESSION['id']?>&tipo=cartao&crud=cadastro" method="post">
				<label>Bandeira</label>
				<select required name="bandeira">
					<option value="">Selecione uma Bandeira</option>
					<option value="Visa">Visa</option>
					<option value="Master">Master</option>
					<option value="Santader">Santader</option>
					<option value="Brasil">Banco do Brasil</option>
					<option value="Bradresco">Banco Bradresco</option>
				</select>
				<br>
				<label>Numero do Cartão</label>
				<input type="number" name="num_cartao">
				<br>
				<label>Vencimento</label>
				<input type="date" name="vencimento">
				<br />
				<label>Limite de creditos</label>
				<input type="number" name="limite_credito">
				<br />
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</div>
	</center>
</body>
</html>