<?php
	session_start();
	require 'connection.php'; 
	if((isset($_SESSION['op']) and $_SESSION['op'] == 1)? db_conecta() ? 1:0:0){		
		function formAddItem($val, $tabela){
			$rows = db_select(1,'select tipo from TipoPratos where id='.$val); 
			echo "<p>$rows[0]: <select name='TipPrat".$val."' id= 'TipPrat".$val."'>";   
			$rows = db_select(2,'select id, nome from '.$tabela.' where tipo='.$val.' order by nome asc'); 
			for($i=0; $i<sizeof($rows); $i++){ 
				echo "<option value =".$rows[$i++];
				echo "> ".$rows[$i]."</option>"; 
			}
			echo"</select></p>";		
		}
?>
		<!DOCTYPE html>
		<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
			<head>
				<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
				<meta name="description" content="">
				<meta name="author" content="">
				<meta name="robots" content="noindex" />
				<link rel="stylesheet" type="text/css" href="tela.css" />
				<link rel="stylesheet" type="text/css" href="css/demo.css" />
				<link rel="stylesheet" href="css/datepicker.css">
				<link href="css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="acesso.css" />
				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap-datepicker.js"></script>
				<?php require "patterns/header.php" ?>
			</head>
			<body  id="page-login-index">    
				<h2 align="center" id="cadCard">Manter Cardápio</h2>  
				<div class="container">
					<title>Calendário jQuery</title> 
					<form name="cadastro" method="post" action="cadastrar.php">   
						<table align='center' border="2" cellpadding="10">
							<th>
								<p>Data: 
								<input type="text" name = "calendario" id="calendario" value=
									"<?php 
										echo date('m/d/Y');
									?>"
								/>
								</p>
							</th>
							<th>
								<?php for($i=1; $i<=9; $i++)
									formAddItem($i, "Pratos");
								?> 
								</br></br>
								<input class="grande verde" type="submit" name="Submit" value="Enviar" /> <br />
							</th>
						</table>
						<input type="hidden" name="Edit" id="Edit" value=0 />
					</form>
				</div>
        		<?php require "patterns/footer.php"; ?>
			</body>
		</html>


		<script type="text/javascript">
			$(function() {
    			$( "#calendario" ).datepicker({
    			    showOn: "button",
    			    buttonImage: "calendario.png",
    			    buttonImageOnly: true,
					showButtonPanel:true,
					dateFormat: 'dd-mm-yy'
    			});
				
				function startD(){
					var dados = $("#calendario").serialize();
					jQuery.ajax({
						type: "POST",
						url: "editcardapio.php",
						data: dados,
						success: function( data ){
							$('head').append(data);
							document.getElementById('cadCard').innerHTML = (dadosR? "Editar":"Cadastrar") + " Cardápio";
							document.getElementById('Edit').value = (dadosR? 1 : 0);
							if(dadosR)
								for(var i=1; i<=9; i++)
									$("#TipPrat"+i).val(dadosR[i-1]);			
						}
					});
				}
				$(startD);
				$("#calendario").change(startD);	
			});
		</script>
		
 <?php
	}
	else {
  		header("Location:login.php"); 
	}
?>


