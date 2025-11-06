<?php
//1 - Escreva um programa em PHP que exiba seu nome na tela.
echo "Matheus Sidney Santos Carvalho\n";

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$somarNotas = 10 + 9 + 8;
$mediaNotas = $somarNotas / 3;

echo "A média das notas é: $mediaNotas\n";

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$valorEmMetros = $argv[1];
$valorEmCm = $valorEmMetros * 100;

echo "O valor $valorEmMetros metros é equivalente a $valorEmCm centímetros\n";

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = $argv[2];
if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
    echo("O ano $ano é bissexto!\n");
} else {
    echo("O ano $ano não é bissexto!\n");
}

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$tempCelsius = $argv[3];
$tempConvertida = ($tempCelsius * 9 / 5) + 32;

echo("$tempCelsius" . "°C é equivalente a $tempConvertida" . "°F\n");