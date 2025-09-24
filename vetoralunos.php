<?php 
	
	$idade  = array();
	$idade[0] = 18;
	$idade[1] = 20;
	$idade[2] = 30;
	$idade[3] = 30;
	$idade[4] = 30;
	$idade[5] = 30;


	/*echo("<br/>" .$idade[0] . "<br/>" . $idade[1]. "<br/>" . $idade[2]);

	$email[]= "maria@hotmail.com";
	$email[]= "jose@gmail.com";

	print_r($email);
	echo ("<br/>");
	var_dump($email);
	*/

	for($i=0; $i < 7, $i++){
		$idade[$i] = 12;
	}

	for($cont=0; $cont= < 7, $cont++){
		echo "<br/>O valor de Vetor: " . $idade[$cont];
	}

 ?>