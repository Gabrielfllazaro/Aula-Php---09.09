<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$primeiroNome = $_POST['primeiroNome'];
	$segundoNome = $_POST['segundoNome'];
	$escolhaPets = $_POST['escolhaPets'];


	echo($primeiroNome . " - " 
		. $segundoNome ." - " 
		. $escolhaPets);

	echo '<br><br><a href="../index.php">Voltar</a>';

	//header("location: ../index.php")
}else{
	echo"É GET";
}
	
 ?>