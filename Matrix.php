<?php

$doces = [["Paçoca",8.5],["Bananada",3], ["Jujuba",7], ["Brigadeiro",7.5], ["Bolo de cenoura com corbetura de chocolate", 10]];
$doces[1][1] = 4;
// print_r($doces);
array_push($doces, ["Quidim",7]);

foreach($doces as $elem){
    print($elem[0] . " ". $elem[1] ."\n");
}
?>  