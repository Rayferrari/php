<?php

// $lista = ["Café", "Açucar", "Manteiga", "Pão"];

// for($i=0; $i<=3; $i++){
//     echo "$lista[$i]\n";
// }

// Outro modelo >>> 

// $lista = ["Café", "Açucar", "Manteiga", "Pão"];
// // echo count($lista);
// for($i=0; $i<count($lista); $i++){
//     echo "$lista[$i]\n";
// }


// Outro exemplo  >>>

// $lista = ["Café", "Açucar", "Manteiga", "Pão"];
// array_push($lista, "Queijo");

// // o push acrescenta >>>  o pop tira da lista 
// // echo count($lista);

// for($i=0; $i<count($lista); $i++){
//     echo "$lista[$i]\n";
// }
// $ultimo = array_pop($lista);
// echo$ultimo

//  Outro exemplo >>>


$lista = ["Café", "Açucar", "Manteiga", "Pão"];
array_push($lista, "Queijo");

// for($i=0; $i<count($lista); $i++){
//     echo "$lista[$i]\n";
// }
sort($lista);
// inserir presunto porém de forma que continue ordenado
// array_splice(1, 2, 3, 4)
// 1. Sua lista 
// 2. Posição que você quer inserir 
// 3. Quer remover elementos? Se não quiser, coloque 0
// 4. Elemento que você quer inserir 

array_splice($lista, 4, 0, "Presunto");
foreach ($lista as $item) {
    echo "$item\n";
}

$ultimo = array_pop($lista);
// echo $ultimo

?>