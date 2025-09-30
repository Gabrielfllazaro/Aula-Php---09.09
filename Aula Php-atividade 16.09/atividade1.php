<?php 
 
 	echo("<hr>");
	echo("Atividade 1 !!");

	
	$decisao =0;
	$maior = 0;
	$quantidade= 1;
	$cont = 0;
	$contp = 0;
	

	

	while($quantidade < 3){

		echo("</br>Digite: 1-Continuar 0-Parar");
		$decisao = 1;

		if ($decisao ==1){
			echo("</br>Digite o num". $cont);
			$cont = 10;

			if ($contp > 0){
				if($cont > $contp){
					$maior = $cont;
				}else{
					$maior = $contp;
				}
			}else{
				$maior = $cont;
			}

			$contp = $cont +1;
		}


		$quantidade ++;
	}

	
	
	echo($decisao);
	echo("</br>O Maior número é: ".$maior);




 ?>