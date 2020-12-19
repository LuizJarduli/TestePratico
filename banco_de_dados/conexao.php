<?php 
	
	//Informações para conexão
	$servidor = "localhost";
	$bd = "teste_pratico";
	$usuario = "root";
	$senha = "";
	//Criando Conexão - utf- 8 
	$con = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8",
		$usuario,
		$senha,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));


?>