<?php  
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	$f = 0;
	$cont = true;

	while ($troca != true) {
    	

    // Compara num1 e num2
    	if ($num1 < $num2) {
        	$temp = $num1;
        	$num1 = $num2;
        	$num2 = $temp;
        	$troca = false;
    	}	

    // Compara num2 e num3
    	if ($num2 < $num3) {
        	$t = $num2;
       		$num2 = $num3;
        	$num3 = $t;
        	
    	}else{
    		$troca = false;
    	}
	}
?>