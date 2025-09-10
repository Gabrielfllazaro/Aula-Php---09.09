<?php  
	$altura1 = 0.00;  
	$altura2 = 0.00;  
	$idade = 0;
	$sexo = "";
	$soma = 0;
	$media = 0;
	$idadeF = 100; 
	$idadeM = 0; 
	$cont = 0;
	$teste = 0;

	while($cont < 50){
		echo ("</br>Digite sua altura:</br>");
		$altura = 1.60;
		echo ("Digite sua idade:</br>");
		$idade = 20; 
		echo ("Digite seu sexo (F/M):</br>");
		$sexo = "Feminino";

		
		if ($altura > $altura2) {
			$altura2 = $altura; 
		}
		if ($altura < $altura1 || $altura1 == 0) {
			$altura1 = $altura; 
		}

		if ($sexo == "Feminino") {
			if ($idade < $idadeF) {
				$idadeF = $idade;
			}
			$soma += $altura;
			$teste++; 
		}elseif ($sexo == "Masculino") {
			if ($idade > $idadeM) {
				$idadeM = $idade;
			}
		}
		$cont++;
	}

	$media = $soma /$teste;

	
	echo("</br>A maior altura é ".$altura2."m e a menor é ".$altura1."m</br>");
	echo("A média de altura feminina é : ".$media."m</br>");
	echo("A idade do homem mais velho é ".$idadeM." anos e a idade da mulher mais nova é ".$idadeF." anos.</br>");
?>
