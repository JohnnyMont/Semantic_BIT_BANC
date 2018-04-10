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
		$sql = "SELECT * FROM cartaocredito WHERE id_cartao = '{$id}';";
		$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($dados as $value) :
			?>
			<form action="processar.php?id=<?=$_SESSION['id']?>&tipo=cartao&crud=editar&id_cartao=<?=$_GET['id']?>" method="post">
				<label>Numero do Cartao</label>
				<input type="text" name="num_cartao" value="<?=$value->num_cartao?>">
				<br>
				<label>Bandeira</label>
				<input type="text" name="bandeira" value="<?=$value->bandeira?>">
				<br>
				<label>Limite Credito</label>
				<input type="text" name="limite_credito" value="<?=$value->limite_credito?>">
				<br>
				<label>Data de Vencimento</label>
				<input type="date" name="vencimento" value="<?=$value->vencimento?>">
				<br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
			<?php
		endforeach;
		?>
	</center>
</body>
</html>