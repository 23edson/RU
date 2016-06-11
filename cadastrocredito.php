<?php
	session_start();
	require 'connection.php'; 
	if((isset($_SESSION['op']) and $_SESSION['op'] == 1)? db_conecta() ? 1:0:0){
?>
<!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="tela.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <link rel="stylesheet" href="css/datepicker.css">

    <meta name="description" content="">
    <meta name="author" content="">
 
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-datepicker.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-login-index">

<div class="skiplinks">

<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22;padding:2px">
        <div class="container-fluid">
       
            <a href="http://uffs.edu.br"><img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" /></div></header>
     <br><br>   <br><br>  <br><br>      
     <div class="container">

  


  <section>       
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
	if(!isset($_POST["matricula"])){
?>
              <form action="cadastrocredito.php" method="post" enctype="multipart/form-data">
    
               <header><h1 id="cc" style="color: #228B22"><span>Cadastrar Creditos</span></h1></header>

         <p> 
                                   <p style="color:black;"><label for="matricula" class="uname" data-icon="" style="text-align: center">Matricula</label>
                                    <input id="matricula" name="matricula" placeholder="" required="true"/>
									<input class="btn btn-success" type="submit" value="Pesquisar" name="fsub" id="fsub" />
		</form>
<?php
	}
	else if(!isset($_POST["id_bilhete"])){
?>
		<p style="color:black;"><label for="matricula" class="uname" data-icon="" style="text-align: center">Matricula</label>
                                    <input id="matricula" value='<?php echo $_POST["matricula"]; ?>' name="matricula" placeholder="" required="true" disabled="disabled"/>
		<form action="cadastrocredito.php" method="post" enctype="multipart/form-data">
                                                      
                                    <p style="color:black;"><label for="matricula" class="uname" data-icon="" style="text-align: center">Nome</label>
<?php
	$rows = db_select(2,'select nome, id_bilhete from Pessoa where id="'.$_POST["matricula"].'"');
	
?>
                                    <input id="nome" name="nome" value='<?php echo $rows[0]; ?>' placeholder="" required="true" disabled="disabled"/>
                                    

                                    <p style="color:black;"><label for="credito" class="uname" data-icon="" style="text-align: center" >Valor em dinheiro</label>
                                    <input type="text" required="required" id="numbers" name="numbers" pattern="[0-9]+$+." />
									<input type="hidden" id="id_bilhete" name="id_bilhete" value='<?php echo $rows[1]; ?>' />
									<input type="hidden" id="matricula" name="matricula" />
                                    
                                    

                                    <input class="btn btn-success" type="submit" value="Salvar" name="fsub" id="fsub" /> 
		</form>
<?php
	}
	else{
		$rows = db_select(1,'select valor from Bilhete where cod='.$_POST["id_bilhete"]);
		$query = db_query('update Bilhete set valor='.($_POST["numbers"]+$rows[0]).' where cod='.$_POST["id_bilhete"]);
		if($query)
			echo "<script type='text/javascript' language='javascript'>
					alert('Inserido com sucesso!'); </script>";
		else
			echo "<script type='text/javascript' language='javascript'>
					alert('Problemas de inserção!'); </script>";
	}	
?>       
                                </p>
        </div></div>


    
        <div class="footnote text-center"><div class="text_to_html"><p style="text-align:center;"><b></div>
        
          
          <img id="comida" src="comida.jpg" width="400" height="120"  alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
      
        </section>
      
    </div> <!-- /container -->
  </div>




        
</style>
</body>
</html>
 <?php
	}
	else {
  		header("Location:login.php"); 
	}
?>


