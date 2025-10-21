<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My project Formulário</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<h1>Cadastro de usuários</h1>

	<form action="#" method="post"> 
		<label for="primeiroNome">Primeiro nome</label>
		<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro nome..." maxlength="30" required autofocus>
		<label for="segundoNome">Segundo nome</label>
		<input type="text" name="segundoNome" id="segundoNome" placeholder="Segundo nome..." maxlength="30" required>
		<label for="escolhaPets">Escolha seu pet: </label>
		<select id="escolhePets" name="escolhaPets">
			<option value="Nenhum">Nenhum</option>
			<option value="gato">gato</option>
			<option value="cachorro">cachorro</option>
			<option value="peixe">peixe</option>
		</select>
		<button type="submit">enviar</button>
		<button type="reset">limpar</buttom>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>