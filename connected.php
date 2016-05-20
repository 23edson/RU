<?php
	function Conectar() {
	$config = parse_ini_file('config.ini'); 
	$conecta = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']) or print (mysqli_error());
	return $conecta;
	}
	//mysqli_select_db($conecta) or print(mysqli_error());
?>
