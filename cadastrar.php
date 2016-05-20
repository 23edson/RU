<?php 
	require 'connection.php';
	require 'functions.php';
	if(isset($_POST["Submit"])){
		$a = $_POST["calendario"];
		$b = dateFromCalendar($a);
		$query = db_query('insert into Cardapio values(0,"'.$b.'")');
		if(!$query)
			echo "Erro: O cardápio não pôde ser aberto.";
		else{
			$query = db_select(1,'select max(cod) from Cardapio');
			$card = $query[0];
			if(!$query)
				echo "Erro: O cardápio não pôde ser identificado.";
			else{
				$s=true;
				for($i=1; $i<=9; $i++){
					$query = db_query("insert into PratosCardapio values(0,".$_POST['TipPrat'.$i].", ".$card." )");
					if(!$query)
						$s=false;
				}
				if(!$s)
					echo "Erro: O cardápio não pôde ser salvo.";
				else
					echo "Cardápio de ".$_POST["calendario"]." salvo com sucesso!";
			}
		}
	}
	else
		echo"Você não possui pemissões de acesso suficientes para essa página";
?>
