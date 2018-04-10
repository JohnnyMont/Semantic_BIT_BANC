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
		<h1>Nome dos Membros</h1>
		<?php
		require_once("Conexao.php");
		$conexao = new Conexao();
		$id = $_GET['id'];
		$sql = "SELECT * FROM membros WHERE id_membro = '{$id}';";
		$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($dados as $value) :
			?>
			<form action="processar.php?id=<?=$_SESSION['id']?>&tipo=membro&crud=editar&id_membro=<?=$_GET['id']?>" method="post">
				<label>Nome Completo</label>
				<input type="text" name="nomeCompleto" value="<?=$value->nomeCompleto?>">
				<br>
				<label>CPF</label>
				<input type="text" name="cpf" value="<?=$value->CPF?>">
				<br>
				<label>E-mail</label>
				<input type="email" name="email" value="<?=$value->email?>">
				<br>
				<label>Data de Nascimento</label>
				<input type="date" name="dataNasc" value="<?=$value->dataNasc?>">
				<br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
			<?php
		endforeach;
		?>
	</center>
</body>
</html>