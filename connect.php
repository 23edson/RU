<?php
	session_start();
	require 'connection.php'; 
	$conecta = db_conecta();
	$login=$_POST['inputCard'];
    $senha=$_POST['password2'];
    $num = db_select(1,"SELECT adm FROM Pessoa WHERE email = '".$login."' AND senha = '".$senha."' and adm=1");
	
   if($num[0] == 1 ){ // funcionario
      $_SESSION['login'] = $_POST['inputCard'];     //gravo nome do usuário de log
      $_SESSION['op'] = 1;
      $_SESSION['logou'] = 1;
      $_SESSION['tempo'] = (time()+30);       //seto tempo de duração do session
   header("Location:acesso.php");      //redireciona

    } else{
         echo "<script language='javascript'>
       alert('LOGIN OU SENHA INVALIDOS!');
       javascript:history.back();
       </script>";
         $_SESSION["logou"] = 0;
  
     }
    

?>
