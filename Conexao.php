<?php
class Conexao{
	private $con;
	public function setCon($data){
		$this->con = $data;
	}
	public function getCon(){
		return $this->con;
	}
	public function __construct(){
		try{
			//endereço da conexão pode ser de ip ou nme de dns
			//$servidor= "localhost:porta //3306";
			$servidor= "localhost";
			$user= "root";
			$pwd= "";
			$bd= "bitbank";	
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd", $user, $pwd));
			$this->getCon()->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//echo "Correto";
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}
	}
}
?>
