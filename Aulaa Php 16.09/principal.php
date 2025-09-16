<?php 

	echo("======PRINCIPAL=======</br>");

	include_once ("cabecalho.php");

	$idade = 20;

	if($idade < 16){
		echo("</br>");
		include("votacao_menor.php");
		
	}elseif($idade < 18){
		echo("</br>");
		include("votacao_16.php");
		
	}else{
		echo("</br>");
		include("votacao_maior.php");
		
	}


	include_once ("rodape.php");

	echo("</br> </br>linha: <hr>");

 ?>