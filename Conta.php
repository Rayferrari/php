<?php
//  Vamos criar um sistema bancário com 
// Saque, depósito, extrato, transferência 

class Conta{
    public $saldo;
    public $numeroConta;
    public $titular;
    public $extrato;

    public function __construct($titular, $numeroConta, $saldo=0){
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->extrato = [];
}

public function saque ($valor){

    if($valor < 0){
        echo "Valor inválido\n";
    }
    else if ($this->saldo >=$valor){
        $this->saldo = $this->saldo - $valor;
        // $this->saldo -= $valor;
        // echo "Saque realizado com sucesso.\n"; echo "Saldo atual: $this->saldo.\n";
        $saida = "Saque realizado com sucesso.\n";
        $saida = $saida . "Saldo atual: $this->saldo.\n";
        array_push($this->extrato, $saida);
        
    }
    else{
        echo "Saldo Insuficiente\n.";
    }
}

public function deposito($valor){
    if($valor > 0){
        $this->saldo += $valor;
        // echo "Deposito realizado com sucesso.\n";
        // echo "Saldo atual: R$ $this->saldo.\n";
        $saida = "Deposito realizado com sucesso.\n";
        $saida = $saida . "Saldo atual: $this->saldo.\n";
        array_push($this->extrato, $saida);

    }
    else{
        echo "Valor Inválido\n";
    }
}

public function transferencia($destinatario, $valor){
    if ($valor <= 0){
        echo "Valor Inválido\n";
    }
    else if ($this -> saldo >= $valor){
        $this->saldo -=$valor;
        $destinatario->saldo += $valor;
        // echo "Transferência efetuada com sucesso.\n";
        // echo "Saldo atual: $this->saldo.\n";
        $saida = "Transferência efetuada com sucesso.\n";
        $saida = $saida . "$destinatario->titular recebeu $valor.\n";
        $saida = $saida . "Saldo atual: $this->saldo.\n";
        array_push($this->extrato, $saida);
        
        $saida2 = "Tranferência recebida com sucesso.\n";
        $saida2 = $saida2 . "$this->titular enviou $valor.\n";
        $saida2 = $saida2 . "Saldo atual: $destinatario->saldo.\n";
        array_push($destinatario->extrato, $saida2);
    }

    else{
        echo "Saldo Insuficiente.\n";
    }
}

public function verificarExtrato (){
    echo "Extrato do(a) $this->titular.\n";
    foreach($this->extrato as $operacao){
        echo $operacao;
    }
    echo "Fim do Extrato.\n";
    echo str_repeat('-',30) . "\n";
}

} 

$conta1 = new Conta("João", "10000", 500);
$conta2 = new Conta("Cristina", "20000", 1000);
$conta1->saque(50);
$conta1->deposito(100);
$conta1->transferencia($conta2, 200);
$conta1->verificarExtrato();
$conta2->verificarExtrato();
?>