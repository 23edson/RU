<?php
	session_start();
	require 'connection.php'; 
	require 'functions.php';
	if(isset($_POST["calendario"])and (isset($_SESSION['op']) and $_SESSION['op'] == 1)? db_conecta() ? 1:0:0){
		$a = dateFromCalendar($_POST["calendario"]);
		$query = db_select(1,'select id_pratos from (Cardapio join PratosCardapio on cod = id_cardapio)  join Pratos on id_pratos = Pratos.id where Data="'.$a.'"');
?>
		<script>
			var dadosR = <?php echo (!$query? '0;' : 'new Array();');
			if($query)
				foreach($query as $item)
					echo "dadosR.push('".$item."');";
?>
		</script>
<?php		
	}
	else 
		echo"<p>Acesso Negado!</p>";
?>
