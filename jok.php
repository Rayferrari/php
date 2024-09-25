<?php
$jogador1 = readline(" faça sua jogada:");
$jogadas = ["pedra","papel","tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "$jogador2 \n";


if($jogador1 === "pedra"){
    if($jogador2 === "pedra"){
        echo "empate";
    }
    else if ($jogador2 === "papel"){
        echo "jogador 2 ganhou!\n";
    }
    else if($jogador2 === "tesoura"){
        echo "jogador 1 ganhou!\n";
    }
}
else if ($jogador1 === "tesoura"){
    if($jogador2 === "pedra"){
        echo "jogador 1 ganhou!\n";
    }
    else if ($jogador2 === "papel"){
        echo "jogador 2 ganhou!\n";
    }
    else if($jogador2 === "tesoura"){
        echo "empate\n";
    }
}
else if ($jogador1 === "papel"){
    if($jogador2 === "pedra"){
        echo "jogador 1 ganhou!\n";
    }
    else if ($jogador2 === "tesoura"){
        echo "jogador 2 ganhou!\n";
    }
    else if($jogador2 === "papel"){
        echo "empate\n";
    }
}
    
