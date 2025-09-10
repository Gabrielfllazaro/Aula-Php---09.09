<?php  
	//2
	$num = 35;
	//a)
	if($num % 2 == 0 && $num % 5 == 0 && $num % 10 == 0){
		echo ("Número divisível por 2, 5 e 10");
	}else if($num % 2 == 0){
		echo ("Número divisível por 2");
	}else if($num % 5 == 0){
		echo ("Número divisível por 5");
	}else if($num % 10 == 0){
		echo ("Número divisível por 10");
	}else{
		//b)
		echo("Não é divisível por 2, 5 e 10");
	}

	


?>