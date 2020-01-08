<?php  


$nome = "Cris";

$sobrenome = "é legal";

$juntando = $nome . " " . $sobrenome; // ponto(.) para concatenar variáveis

echo $juntando;

exit; // exit serve para parar a execução do código

$anoNascimento = 2000;

$nome1 = "Testando If else";

$nome2 = "testando";

echo $anoNascimento;

echo "</br>"; // pulando uma linha

$nomeCompleto = "Cristiano da Palma Neves Junior";

echo $nomeCompleto;

unset($nome2); // unset serve para destruir uma variável

if(isset($nome1)){ // isset é um comando para validar se uma váriavel existe, SE existir PRINT na tela

    echo "</br>";
	echo $nome1;
}


?>