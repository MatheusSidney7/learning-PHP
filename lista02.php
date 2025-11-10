<?php
// 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
/*for($numero = 0; $numero <= 100; $numero++) {
    if ($numero % 2 !=0){
    echo "$numero\n";
    }
}*/

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

/*$altura = $argv[1];
$peso = $argv[2];
$imc = $peso / ($altura ** 2);

if($imc < 18.5){
    echo "Seu IMC é $imc\n Você está abaixo do peso!";
} elseif ($imc < 25){
    echo "Seu IMC é $imc\n Você está no peso ideal!";
} elseif ($imc < 30) {
    echo "Seu IMC é $imc\n Você está com sobrepeso!";
} else {
    echo "Seu IMC é $imc\n Você está com obesidade!";
}*/

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$hora = 3;

if($hora >= 6 && $hora < 12) {
    echo "Bom dia!";
} elseif($hora > 12 && $hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}