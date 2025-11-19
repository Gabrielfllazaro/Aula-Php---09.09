<?php

$voto = $_GET['voto'];

if (!isset($_COOKIE['voto'])) {

    setcookie("voto", $voto, time() + (3600 * 24 * 30));

    $msg = "Obrigado por votar! Seu voto para <strong>$voto</strong> foi registrado.";
} 
else {
    $msg = "Você já votou uma vez. Seu voto anterior foi: <strong>" . $_COOKIE['voto'] . "</strong>.";
}

echo $msg;
?>