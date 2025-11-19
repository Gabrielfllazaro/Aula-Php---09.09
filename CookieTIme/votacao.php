<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Enquete - Melhor clube de SP</title>
</head>
<body>

<h2>Qual o melhor clube de São Paulo?</h2>

<form action="result.php" method="GET">
    <label> 
        <input type="radio" name="voto" value="Corinthians" required>
        Corinthians
    </label><br>

    <label>
        <input type="radio" name="voto" value="Palmeiras">
        Palmeiras
    </label><br>

    <label>
        <input type="radio" name="voto" value="Santos">
        Santos
    </label><br>

    <label>
        <input type="radio" name="voto" value="São Paulo">
        São Paulo
    </label><br>

    <br>
    <button type="submit">Votar</button>

    <img src="Corinthians.png">
    <img src="Palmeiras.png">
    <img src="Santos.png">
    <img src="Sao_Paulo.png">
</form>

</body>
</html>
