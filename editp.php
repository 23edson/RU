<?php
include("connected.php");
$banco = Conectar();

//for($i = 1; $i <= 4; $i++){
	//$str = 'i' . (string)$i;
		//	$str2 = 'n' . (string)$i;
	//echo $_POST[$str] . " " . $_POST[$str2] . "\n";  
//}
/*if($_POST['i1'] == '' && $_POST['n1'] == '')echo "1\n";
else echo $_POST['i1'] . " " . $_POST['n1'] . "\n";
if($_POST['i2'] == '' && $_POST['n2'] == '')echo "2\n";
else echo $_POST['i2'] . " " . $_POST['n2'] . "\n"; 
if($_POST['i3'] == '' && $_POST['n3'] == '')echo "3\n";
else echo $_POST['i3'] . " " . $_POST['n3'] . "\n";
if($_POST['i4'] == '' && $_POST['n4'] == '')echo "4\n";
else echo $_POST['i4'] . " " . $_POST['n4'] . "\n";

exit;*/
if(isset($_POST['fsub1'])){
	
	$query = "select count(*) from Pratos";
	
	$result = mysqli_query($banco,$query);
	
	//e
	if($result){
		$c= mysqli_fetch_row($result);
		$count = $c[0];
		//echo $count; exit;
		for($i = 1; $i <= $count; $i++){
			
			
			$str = 'i' . (string)$i;
			//$str2 = 'n' . (string)$i;
			
			if(isset($_POST[$str])){
					if($_POST[$str] != ""){
						$name = $_POST[$str];		
						$query = "update Pratos set nome='".$name."' where id=".$i;
						$result = mysqli_query($banco,$query);

					}
					if(!$result){
						die("An error occurred while updating");		
								
					}
			
			}		
		
		
		}
		echo 'Atualizado com sucesso';
		echo '<meta http-equiv="refresh" content="1;URL=editprato.php" />';	
	}
}
else header('Location: editprato.php');

 ?>
