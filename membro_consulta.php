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
		<?php
		require_once("Conexao.php");
		$conexao = new Conexao();
		$usuario = $_SESSION['usuario'];
		$sql = "SELECT * FROM membros WHERE id_usuario = '{$usuario}' ORDER BY nomeCompleto DESC;";
		$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($dados as $value) :
		?>
			<br>
		<?php
		endforeach;
		?>
	</center>
</body>
</html>