<?php
//1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function calcular(int $numero, int $numero2, string $operacao): float {
    return match ($operacao) {
        'somar' => $numero + $numero2,
        'subtrair' => $numero - $numero2,
        'multiplicar' => $numero * $numero2,
        'dividir' => $numero / $numero2
    };
}

echo calcular(2, 5, "multiplicar");

//2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function calculaIMC(float $altura, float $peso) {
    $imc = $peso / ($altura ** 2);
    echo "\nSeu IMC é de $imc\n";
    if($imc < 18.5) {
        echo "Você está abaixo do peso!";
    } elseif($imc < 25) {
        echo "Você está no peso ideal!";
        } elseif($imc < 30) {
            echo "Você está com sobrepeso!";
        } else {
            echo "Você está com obesidade!";
        }
}

calculaIMC(1.80, 68.5);

//3. Crie uma função em PHP que converta graus celsius para Fahrenheit.

function convertF(float $grausC) {
    $convert = ($grausC * 9 / 5) + 32;
    echo ("\n$grausC" . "°C é equivalente a $convert" . "°F\n");
}

convertF(25);