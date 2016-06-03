<?php 
	require 'connection.php';
	require 'functions.php';
	db_conecta();
	
	function fillTable(){
		$date[0] = new DateTime(date('Y-m-d H:i:s'));
		$week = date('w', strtotime( $date[0]->format('Y-m-d')));
		$date[0]->modify((1-$week).' day');
		for($i=1; $i<5; $i++){
			$date[$i] = new DateTime($date[0]->format('Y-m-d'));
			$date[$i]->modify($i.' day');
		}
		for($i=1; $i<=5; $i++)
			$query[$i-1] = db_select(1,'select nome from (Cardapio join PratosCardapio on cod = id_cardapio)  join Pratos on id_pratos = Pratos.id where Data="'.$date[$i-1]->format('Y-m-d').'"'); 
		echo "<tr><center>
				<th>Segunda-feira<br/>".$date[0]->format('d/m/Y')."</th>
				<th>Terça-feira<br/>".$date[1]->format('d/m/Y')."</th>
				<th>Quarta-feira<br/>".$date[2]->format('d/m/Y')."</th>
				<th>Quinta-feira<br/>".$date[3]->format('d/m/Y')."</th>
				<th>Sexta-feira<br/>".$date[4]->format('d/m/Y')."</th>
			</center></tr>";
		for($j=0; $j<9; $j++){
			echo "<tr>";
			for($i=0; $i<5; $i++){
				echo "<td>".$query[$i][$j]."</td>";
			}
			echo "</tr>";
		}	
	}
?>
<!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
	<head>
		<link rel="stylesheet" type="text/css" href="tela.css" />
		<meta name="generator" content="Bootply" />
		<meta name="description" content="Example of using CSS only for masonry / isotope style layout with Bootstrap panels." />
		<meta name="robots" content="index" />
		<?php require "patterns/header.php" ?> 
	</head>
	<body  id="page-login-index">
		<?php require "patterns/login.php"; ?>
		<h2 style="text-align:center;">Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</h2>
		<br><br>
		<table align='center' border="2" cellpadding="10">
			<?php
				fillTable();
			?>
		</table>
		<?php require "patterns/footer.php"; ?>
	</body>
</html>


