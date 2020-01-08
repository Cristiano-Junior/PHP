<?php

$nome = $_GET["a"]; // comando $_GET é um comando para pegar informações na URL (método GET)

$numero = (int)$_GET["b"]; // transformando o valor via GET em inteiro

var_dump($nome);

echo "</br>";

var_dump($numero);

echo "</br>";

$ip = $_SERVER["REMOTE_ADDR"]; // Comando para pegar o IP da máquina de quem está acessando

echo $ip;

echo "</br>";

$pagina = $_SERVER["SCRIPT_NAME"]; // Comando para ver qual página o usuário está acessando

echo $pagina;
?>