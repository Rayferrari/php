<?php
// usuario digitara um número e a aplicação 
// completará o número digitado até cem

$usuario= readline("digite um número: ");
// echo $usuario;

for($i = $usuario; $i <= 100; $i++){
    echo "$i\n";
}
?>