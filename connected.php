<?php
	function Conectar() {
	$config = parse_ini_file('config.ini'); 
	$conecta = mysqli_connect("localhost", $config['username'], "", $config['dbname']);
	if (mysqli_connect_errno()) {
    		printf("Connect failed: %s\n", mysqli_connect_error());
    		exit();
	}
	return $conecta;
	}
	//mysqli_select_db($conecta) or print(mysqli_error());
?>
