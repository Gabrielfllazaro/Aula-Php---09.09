<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
</head>
<body>
	<main class="container">
		<h1>Cadastro de usuários</h1>
		<form action="include/cadastrar.php" method="post">
			<div class="md-3">
				<label for="primeiroNome">Primeiro nome</label>
				<input type="text" name="primeiroNome" 
				id="primeiroNome" placeholder="Primeiro nome ..."
				maxlength="50" required autofocus autocomplete="off">	
			</div>
			<div class="md-3">
				<label for="segundoNome">Sobrenome</label>
				<input type="text" name="segundoNome" 
				id="segundoNome" placeholder="Sobrenome ..."
				maxlength="50" required autocomplete="off">
			</div>

			<label>estado</label>

			<select>				
				<option value="SP">São Paulo</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="MG">Minas Gerais</option>
				<option value="BA">Bahia</option>
			</select> 

			<div class="md-3">
				<label for="escolhaPets">Escolha seu Pet</label>
				<select id="escolhaPets" name="escolhaPets">
					<option value="nenhum">Nenhum</option>
					<option value="cachorro">Cachorro</option>
					<option value="gato">Gato</option>
					<option value="peixe">Peixe</option>
				</select>
			</div>

			<div class="grupo">
			<label>Escolha seu pet: 
			<input type="checkbox" name="nenhum"><label >Nenhum</label>
			<input type="checkbox" name="cachorro"><label >Cachorro</label>
			<input type="checkbox" name="gato"><label >Gato</label>
			<input type="checkbox" name="peixe"><label >Peixe</label>
			</label>
			</div>
			<br>

		    <div class="grupo">
			<label>Estado civil:</label>
			<input type="radio" name="estado_civil" value= "Casado"><label>Casado</label>
			<input type="radio" name="estado_civil" value= "Solteiro"><label>Solteiro</label>
	        </div>

			<div class="md-3">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</div>
			<div class="md-3">
				<button class="btn btn-success" type="reset">Limpar</button>
			</div>
			<input type="hidden" name="user" value="admin">
			<input type="hidden" name="nivel" value="2">
			<input type="submit" name="OK">
			<br/>

			<textarea name="msg"cols="50" rows="8">

			</textarea>
			<br/> <br/>
			<input type="submit" name="ENVIAR">-
			
		</form>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
