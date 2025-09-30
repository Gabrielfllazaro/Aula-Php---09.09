<?php  
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	$t = 0;

	$troca = true; 

	while ($troca != false) { 
		$troca = false;

	    if ($num1 < $num2) {
	        $temp = $num1;
	        $num1 = $num2;
	        $num2 = $temp;
	        $troca = true; 
	    }

	    
	    if ($num2 < $num3) {
	        $temp = $num2;
	        $num2 = $num3;
	        $num3 = $temp;
	        $troca = true; 
	    }
	}

	echo "Números em ordem decrescente: $num1 $num2 $num3";
?>
