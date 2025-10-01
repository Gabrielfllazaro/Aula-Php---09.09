<?php 

	echo("<br/>ATIVIDADE1 ");
	echo("<br/>");

	$emp = array(
		array(1, "José", 4000),
		array(1, "Maria", 5000),
		array(1, "João", 3000)
	);

	echo "<pre/>";

	print_r($emp);
	
	echo "<pre/>";
	for ($linha=0;$linha<3;$linha++){
		for ($coluna=0;$coluna<3;$coluna++){
			echo $emp[$linha][$coluna]." ";
		}
		echo "<br/>";}


	$arr = array ('v' => 'Vermelho', 'v' => 'Verde', 'a' => array('Azul','Marrom','Preto'));

	// $arr = array(1,2,3,4,5,6,7,8);

	// echo json_encode($arr);

 ?>