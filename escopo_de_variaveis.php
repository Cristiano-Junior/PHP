<?php  

$nome = "Cristiano";

function teste() {

global $nome; // declarando a variável nome como global para poder ser visualizada dentro da função

	echo $nome;
}

function teste2() {

 $nome = "Junior"; // mesmo já tendo uma variável nome declarada, uma não interfere a outra, resultando no print de ambas

	echo $nome . "agora no teste 2";
}


teste();

teste2();
?>