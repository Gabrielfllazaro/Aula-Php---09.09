<?php 
	
	if(isset($_POST["nenhum"])){
		echo"Você escolheu nenhum ".$_POST["nenhum"];
		echo"<br>";

	}if(isset($_POST["cachorro"])){
		echo"Você escolheu o cachorro ".$_POST["cachorro"];
		echo"<br>";

	}if(isset($_POST["gato"])){
		echo"Você escolheu o gato ".$_POST["gato"];
		echo"<br>";

	}if(isset($_POST["peixe"])){
		echo"Você escolheu o peixe ". $_POST["peixe"];
		echo"<br>";

	}if(isset($_POST['estado_civil'])){
		echo "Situação atual: ".$_POST['estado_civil']; 
	}

 ?>