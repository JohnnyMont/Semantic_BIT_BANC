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
		$usuario = $_SESSION['id'];
		$sql = "SELECT * FROM membros WHERE id_usuario = '{$usuario}' ORDER BY nomeCompleto DESC;";
		$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($dados as $value) :
		?>
			<a href="membro_editar.php?id=<?=$value->id_membro?>"><?=$value->nomeCompleto?></a>
			<a href="processar.php?id_membro=<?=$value->id_membro?>&tipo=membro&crud=excluir">Apagar</a>
			<br>
		<?php
		endforeach;
		?>
	</center>
</body>
</html>