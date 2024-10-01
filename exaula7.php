<?php
// Exercicio 33
// Usuario insere sua idade 
// Se menor de idade -> Imprima 3 programas infantis 
// Se maior de idade -> Imprima 3 carros com seus preços 

// function listarCarros(){
//     echo "Opala, R$ 60.000\nVectra, R$ 15.000\nGol, R$ 75.000\n";
// }

// function listarProgramasInfantis(){
//     echo "Tom&Jerry\nPicaPau\nLooneyToones\n";
// }

// $idade = readline("digite sua idade");

// if($idade>=18){
//     listarCarros();
// }
// else{
//     listarProgramasInfantis();
// }



// Exercicio 36
// Computador escolhe um numero 
// Se a soma dos 2 numeros forem par o usuario vence 
// Se for impar, o computador vence 


function ehParOuImpar ($usuario, $computador){
    $soma = $usuario + $computador;
   
    // Se a soma é um número par 
    if($soma%2==0){
        echo "Usuario ganhou\n";
    }
    else{
        echo "Computador ganhou\n";
    }

}

$usuario = readline("Digite um numero: ");
$computador = rand(1,100);

ehParOuImpar ($usuario, $computador);

// Eh isso aí 







