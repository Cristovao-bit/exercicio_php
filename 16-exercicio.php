<?php
/*
 * Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some
 * os quadrados e mostre o resultado.
 */

$number1 = 2;
$number2 = 4;

$quadNumber1 = $number1 ** 2;
echo "O quadrado de {$number1} é: {$quadNumber1} <br>";

$quadNumber2 = $number2 ** 2;
echo "O quadrado de {$number2} é: {$quadNumber2} <br>";

$resultado = $quadNumber1 + $quadNumber2;
echo "A soma entres os quadrados é: {$resultado}";