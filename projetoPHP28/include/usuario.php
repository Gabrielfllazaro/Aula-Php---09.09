<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Web - Sessão de Usuário</title>
</head>
<body>
	<?php 

		session_start();

	 ?>

	 <h3>Sessão de Usuário</h3>
	 Bem -vindo, Sr. <?php echo session_id(); ?>


</body>
</html>