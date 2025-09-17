<?php 

	echo("<hr>");
	echo("Atividade 2 !!");

	$cont = 0;

	while ($cont <= 100){

		if($cont % 10 == 0 && $cont != 0){
			echo("</br>".$cont." Número é múltiplo de 10");
		}

		$cont++;
	}

 ?>