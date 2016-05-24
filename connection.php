<?php
	function db_conecta(){	
		if(!isset($conecta)){	
			$config = parse_ini_file('config.ini'); 
			$conecta = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']) or print (mysqli_error());
		}
		return $conecta;
	}
	
	function db_query($query){
		$conecta = db_conecta();
		return mysqli_query($conecta,$query);
	}

	function db_select($nSel, $query) {
       	$rows = array();
		$res = db_query($query);
       	if($res=== false)
           		return false;
		$i=0;
       	while ($row = mysqli_fetch_row($res)){
			for($j=0; $j<$nSel; $j++)
           		$rows[$i*$nSel+$j] = $row[$j];
			$i++;
		}
       	return $rows;
    }	
?>
