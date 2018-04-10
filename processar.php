<?php 
if (isset($_GET['tipo'])) {
	require_once("Conexao.php");
	$conexao = new Conexao();
	session_start();
	if ($_GET['tipo'] == "cartao") {
		if ($_GET['crud'] == "cadastro") {
			$sql = "INSERT INTO cartaoCredito(bandeira,num_cartao,vencimento,limite_credito,id_usuario) VALUES(:bandeira,:num_cartao,:vencimento,:limite_credito,:id_usuario);";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("bandeira",$_POST['bandeira']);
			$adicionaC->bindParam("num_cartao",$_POST['num_cartao']);
			$adicionaC->bindParam("vencimento",$_POST['vencimento']);
			$adicionaC->bindParam("limite_credito",$_POST['limite_credito']);
			$adicionaC->bindParam("id_usuario",$_GET['id']);
			if($adicionaC->execute()){
				echo "<script>alert('Cadastro de Cartao Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
		if ($_GET['crud'] == "editar") {
			$sql = "UPDATE cartaocredito SET num_cartao = :num_cartao,bandeira = :bandeira,limite_credito = :limite_credito,vencimento = :vencimento WHERE id_cartao = :id_cartao;";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("num_cartao",$_POST['num_cartao']);
			$adicionaC->bindParam("bandeira",$_POST['bandeira']);
			$adicionaC->bindParam("limite_credito",$_POST['limite_credito']);
			$adicionaC->bindParam("vencimento",$_POST['vencimento']);
			$adicionaC->bindParam("id_cartao",$_GET['id_cartao']);
			if($adicionaC->execute()){
				echo "<script>alert('Edição de cartao Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
		if ($_GET['crud'] == "excluir") {
			$sql = "DELETE FROM cartaoCredito WHERE id_cartao = :id_cartao;";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("id_cartao",$_GET['id_cartao']);
			if($adicionaC->execute()){
				echo "<script>alert('Apagação de Cartao Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
	}
	if ($_GET['tipo'] == "membro") {
		if ($_GET['crud'] == "cadastro") {
			$sql = "INSERT INTO membros(nomeCompleto,email,cpf,dataNasc,id_usuario) VALUES(:nomeCompleto,:email,:cpf,:dataNasc,:id_usuario);";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("nomeCompleto",$_POST['nomeCompleto']);
			$adicionaC->bindParam("email",$_POST['email']);
			$adicionaC->bindParam("cpf",$_POST['cpf']);
			$adicionaC->bindParam("dataNasc",$_POST['dataNasc']);
			$adicionaC->bindParam("id_usuario",$_GET['id']);
			if($adicionaC->execute()){
				echo "<script>alert('Cadastro de Membro Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
		if ($_GET['crud'] == "editar") {
			$sql = "UPDATE membros SET nomeCompleto = :nomeCompleto,email = :email,cpf = :cpf,dataNasc = :dataNasc WHERE id_membro = :id_membro;";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("nomeCompleto",$_POST['nomeCompleto']);
			$adicionaC->bindParam("email",$_POST['email']);
			$adicionaC->bindParam("cpf",$_POST['cpf']);
			$adicionaC->bindParam("dataNasc",$_POST['dataNasc']);
			$adicionaC->bindParam("id_membro",$_GET['id_membro']);
			if($adicionaC->execute()){
				echo "<script>alert('Edição de Membro Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
		if ($_GET['crud'] == "excluir") {
			$sql = "DELETE FROM membros WHERE id_membro = :id_membro;";
			$adicionaC = $conexao->getCon()->prepare($sql);
			$adicionaC->bindParam("id_membro",$_GET['id_membro']);
			if($adicionaC->execute()){
				echo "<script>alert('Apagação de Membro Efetuado com sucesso');window.location = 'index.php';</script>";
			}
		}
	}
}
?>