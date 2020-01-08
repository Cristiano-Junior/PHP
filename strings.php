<?php

$nome = "Cris";

$site = 'www.cristianolegal.com.br';

$ano = 2000;

$salario = 5500.00;

$bloqueado = false;

/////////////////// Tipos de váriaveis básicos

////////////////////////////////////////////////////

////////////////// Tipos de váriaveis compostas


$frutas = array("abacaxi","limão","laranja"); // criando um array de frutas

echo $frutas[2]; // printando na tela o índice 2 do array (laranja);

echo "</br>";

$nascimento = new DateTime(); // Toda vez que houver new está se usando conceitos de Orientado a Objetos
// Comando DateTime pega a hora e o dia neste exato momento.

echo var_dump($nascimento);

echo "</br>";
////////////////////////////////////////////////////q


///////////////////Tipos de variáveis especiais

$arquivo = fopen("variaveis.php", "r");

echo var_dump($arquivo);

echo "</br>";

$nulo = NULL;
$vazio = "";

?>