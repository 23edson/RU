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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Example of using CSS only for masonry / isotope style layout with Bootstrap panels." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body  id="page-login-index">
		<div class="skiplinks">
			<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22">
				<div class="container-fluid">
					<a href="http://uffs.edu.br"><img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" /></a></header>

                                <ul class="nav pull-right"></header><header>
                               <h6> <table align='right' border="2" cellpadding="10"> <tr><center>
                               <th id= "table1"> <a href = "login.php"><button class="grande verde">Login</button></br></a>
                                <a id="escrita" href = "formulario.php" class= "form"> Esqueçi minha senha.</a></th></tr></table> </h6>
                                
                                  <br>
                                  <h2 style="text-align:center;">Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul
                                    </h2>
					<br><br>
					<table align='center' border="2" cellpadding="10">
						<?php
							fillTable();
						?>
					</table>
				</header>            
			</ul>
		</div>
		<div id="course-footer"></div>
			<div class="footnote text-center"><div class="text_to_html"><p style="text-align:center;"><b>
				<br><br><br>
				<img id="comida" src="comida.jpg" width="400" height="120"  alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
			</div>
		</div>
	</body>
</html>


