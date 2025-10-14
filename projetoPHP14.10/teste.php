<?php 

	$nome = $_GET['nome'];
	$email = $_GET['email'];

	if($nome === "Gabriel" && $email === "gab@a"){
		echo"<table>";
		echo"<tr>";	
		echo"<th>Nome:</th>";
		echo"<th>Email:</th>";
		echo"</tr>";
		echo"<tr>";
		echo"<td>$nome</td>";	
		echo"<td>$email</td>";
		echo"</tr>";
		echo"</table>";
		
	}else{
		echo "Usuário ou senha inválida !!!";
	}
	

 ?>