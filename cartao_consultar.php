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
		<h1>Numero dos Cartoes</h1>
		<?php
		require_once("Conexao.php");
		$conexao = new Conexao();
		$usuario = $_SESSION['id'];
		$sql = "SELECT * FROM cartaoCredito WHERE id_usuario = '{$usuario}' ORDER BY num_cartao DESC;";
		$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($dados as $value) :
		?>
			<a href="cartao_editar.php?id=<?=$value->id_cartao?>"><?=$value->num_cartao?></a>
			<a href="processar.php?id_cartao=<?=$value->id_cartao?>&tipo=cartao&crud=excluir">Apagar</a>
			<br>
		<?php
		endforeach;
		?>
	</center>
</body>
</html>