<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
	session_start();

	if($_SESSION["nome"] != "master"){

		session_destroy();

		header("location:sessao_bloqueando_paginas.php");

	}
 ?>
</head>
<body>
	<b>Página autorizada-</b>
</body>
</html>