<?php
echo "*************************\n Titular : Matheus Sidney\n Saldo atual: R$ 1000\n ************************************
 1. Consultar saldo atual\n 2. Sacar valor\n 3. Depositar valor\n 4. Sair\n";

 $saldoAtual = 1000;

 do {
 $numero = (int) fgets(STDIN);
    if ($numero == 1) {
        echo "Seu saldo atual é de R$ $saldoAtual\n";
    } elseif ($numero == 2) {
        echo "Quanto deseja sacar?\n";
        $sacar = (float) fgets(STDIN);
        if ($sacar <= $saldoAtual) {
            $saldoAtual -= $sacar;
            echo "Saque realizado com sucesso!\n";
        } else {
            echo "Saldo insuficiente para sacar!\n";
        } 
    } elseif ($numero == 3) {
            echo "Quanto deseja depositar?\n";
            $depositar = (float) fgets(STDIN);
         $saldoAtual += $depositar;
            echo "Depósito realizado com sucesso!\n";
        } elseif ($numero == 4) {
          echo "ADEUS!";
     } else {
           echo "Número inválido!\n";
     }
} while ($numero != 4);