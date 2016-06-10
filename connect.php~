<?php
	session_start();

	$config = parse_ini_file('config.ini'); 
 	$conecta = mysqli_connect("localhost", $config['username'], $config['password'], $config['dbname']) or print (mysqli_error());

    $login=$_POST['inputCard'];
    $senha=$_POST['password2'];
    
    $pla = mysqli_query($conecta,"SELECT * FROM Pessoa WHERE email = '$login' AND senha = '$senha' and adm=1");
    $num=mysqli_num_rows($pla);

   if($num == 1 ){ // funcionario
      $_SESSION['login'] = $_POST['inputCard'];     //gravo nome do usuário de log
      $_SESSION['op'] = 1;
      $_SESSION['logou'] = 1;
      $_SESSION['tempo'] = (time()+30);       //seto tempo de duração do session
   header("Location:acesso.php");      //redireciona

    } else{
		 $ple = mysqli_query($conecta,"SELECT * FROM Pessoa WHERE email = '$login' AND senha = '$senha'");
		 $numr=mysqli_num_rows($ple);
		if($numr == 1 ){ // funcionario
			//$_SESSION['login'] = $_POST['inputCard'];     //gravo nome do usuário de log
			$_SESSION['op'] = 1;
			$_SESSION['logou'] = 1;
			$_SESSION['tempo'] = (time()+30);       //seto tempo de duração do session
			header("Location:tela.php");      //redireciona

		}else{
			echo "<script language='javascript'>
			alert('LOGIN OU SENHA INVALIDOS!');
			javascript:history.back();
			</script>";
            $_SESSION["logou"] = 0;
	}
}
    

?>
