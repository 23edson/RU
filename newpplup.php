<?php 
	include("connected.php");
	
	if(isset($_POST['fsub2'])){
		
		$banco = Conectar();

		if((isset($_POST['inputnome']) && isset($_POST['inputemail'])
		   && isset($_POST['inputmat']) && isset($_POST['password'])) || (isset($_POST['inputfunc'])) ){
			$nome = $_POST['inputnome'];
			$email = $_POST['inputemail'];
			$pass = $_POST['password'];
			$mat = $_POST['inputmat'];

			if(!isset($_POST['inputfunc'])){ $func = "Estudante";
				

			}
			else{

				$func = $_POST['inputfunc'];
				if($func == 'f1') $func = "Estudante";
				else if($func == 'f2') $func = "Professor";
				else if($func == 'f3') $func = "Servidor";
				else $func = "Terceirizado";
			}
			

			$pass = md5($pass);
			$query = "insert into Bilhete (cod,valor) values (NULL, '0')";
			$result = mysqli_query($banco,$query);
			if($result){
				$query = "select MAX(cod) from Bilhete";
				$result = mysqli_query($banco,$query);
				$c= mysqli_fetch_row($result);
				$count = $c[0];
			

			}

			$query = "insert into Pessoa (id,nome,email,funcao,adm,senha,id_bilhete) values ('" . $mat . "','" . $nome . "','" .$email. "','" .$func ."',0,'".$pass. "',".$count . ")";


			$result = mysqli_query($banco,$query);

			if($result){echo 'Cadastrado com sucesso';
		echo '<meta http-equiv="refresh" content="3;URL=acesso.php" />';}

		}


	}


?>
