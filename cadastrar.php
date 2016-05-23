<?php 
	require 'connection.php';
	require 'functions.php';
	if(isset($_POST["Submit"])){
		$a = $_POST["calendario"];
		$b = dateFromCalendar($a);
		if($_POST["Edit"]){
			$query = db_select(1, 'select cod from Cardapio where Data="'.$b.'"');
			if(!$query)
				echo "Não foi possível abrir o Cardápio\n";
			$cardap= $query[0];
			$prat = db_select(1,'select id_pratos from Pratos Join PratosCardapio on Pratos.id=id_pratos where id_cardapio='.$cardap.' order by tipo asc');
			if(!$prat)
				echo"Não pôde ser salvo";
			$s = true;
			for($i=0; $i<9; $i++){
				$query = db_query('update PratosCardapio set id_pratos ='.$_POST['TipPrat'.($i+1)].' where id_pratos='.$prat[$i].' and id_cardapio='.$cardap);
				if(!$query)
					$s=false;
			}
			if(!$s)
				echo "O cardápio não pôde ser alterado!";
			else
				echo "Cardápio de ".$_POST["calendario"]." alterado com sucesso!";
		}
		else{
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
						echo "Cardápio de ".$_POST["calendario"]." cadastrado com sucesso!";
				}
			}
		}
	}
	else
		echo"Você não possui pemissões de acesso suficientes para essa página";
?>
