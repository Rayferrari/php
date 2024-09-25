<?php

// $usuario = readline("digite um número: ");
$anterior = 1;
$atual = 2;

$proximo = $atual + $anteior;
echo $anteior . "\n";
echo $atual . "\n";
echo $proximo . "\n";
for ($i = 0; $proximo <= 2000; $i++){
    $anterior = $atual;
    $atual = $proximo;
    $proximo = $atual + $anterior;
    echo "$proximo\n";
}
?>